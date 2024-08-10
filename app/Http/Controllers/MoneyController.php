<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Money;
use Illuminate\Http\Request;
use League\Csv\Reader;

class MoneyController extends Controller
{
    public function uploadData(Request $request)
    {
        function normalize_array_values($array)
        {
            $normalized_array = array_map(function ($value) {
                // Convert to lowercase
                $value = strtolower($value);
                // Replace special characters at the end with underscores
                $value = str_replace([".", "/", " ", "-", "__"], '_', $value);
                $value = preg_replace('/_$/', '', $value);
                return $value;
            }, $array);
            return $normalized_array;
        }


        // Assuming you're using the Maatwebsite Excel package
        $file = $request->file('bank_statement');

        // Adjust path as needed
        $filePath = $file->getRealPath();

        // Initialize CSV reader
        $csv = Reader::createFromPath($filePath, 'r');
        $csv->setHeaderOffset(0); // Skip header row

        // Get CSV headers
        $headers = $csv->getHeader();

        // Normalize headers
        $titles = normalize_array_values($headers);

        // Read CSV records
        $data = $csv->getRecords();

        $bankId = $request->input("bank");

        // Iterate over each row of data
        foreach ($data as $row) {
            // Check if Withdrawal Amt is present
            if ($row['Withdrawal Amt.']) {
                $moneyType = 1; // Withdrawal
                $moneyAmount = $row['Withdrawal Amt.'];
            } elseif ($row['Deposit Amt.']) {
                $moneyType = 2; // Deposit
                $moneyAmount = $row['Deposit Amt.'];
            } else {
                continue; // Skip if neither withdrawal nor deposit
            }

            // Insert into database
            Money::firstOrCreate(
                ['moneyTransectionId' => $row['Chq./Ref.No.']],
                [
                    'moneyTitle' => $row['Narration'],
                    'moneyAmount' => $moneyAmount,
                    'moneyType' => $moneyType,
                    'moneyBankId' => $bankId, // Assuming you have bankId variable defined
                    'moneyDate' => date("Y-m-d H:i:s", strtotime($row['Date']))
                ]
            );
        }

        return redirect()->route('money');
    }

    public function viewForm()
    {
        if (session()->has("user")) {
            $banks = Bank::select("bankId", "bankName")->get();
            return view("moneyadd", compact("banks"));
        } else {
            return redirect()->route('login');
        }
    }

    public function view()
    {
        if (session()->has("user")) {
            $moneyData = Money::join('tblBank', 'tblBank.bankId', '=', 'tblMoney.moneyBankId')
                ->select('tblMoney.*', 'tblBank.bankName')
                ->orderBy('tblMoney.moneyDate', 'DESC')
                ->get();
            $count = 0;
            return view("money", compact("moneyData", "count"));
        } else {
            return redirect()->route('login');
        }
    }

    public function viewBank()
    {
        if (session()->has("user")) {
            $bankData = Bank::all();
            $count = 0;
            return view("bank", compact("bankData", "count"));
        } else {
            return redirect()->route('login');
        }
    }
}
