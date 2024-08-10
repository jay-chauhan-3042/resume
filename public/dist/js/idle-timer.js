var IdleTimeout = function () {

    return {
        //main function to initiate the module
        init: function () {
            (function ($) {
                $(document).idleTimeout({
                    redirectUrl: "/logout", // redirect to this url. Set this value to YOUR site's logout page.

                    // idle settings
                    idleTimeLimit: 60,           // 'No activity' time limit in seconds. 1200 = 20 Minutes
                    idleCheckHeartbeat: 15,       // Frequency to check for idle timeouts in seconds

                    // optional custom callback to perform before logout
                    customCallback: false,       // set to false for no customCallback

                    // customCallbackKeepAlive: true,
                    // customCallbackKeepAlive: function () {
                    //     console.log('keepalive');
                    // },

                    // configure which activity events to detect
                    // http://www.quirksmode.org/dom/events/
                    // https://developer.mozilla.org/en-US/docs/Web/Reference/Events
                    activityEvents: 'click keypress scroll wheel mousewheel mousemove', // separate each event with a space

                    // warning dialog box configuration
                    enableDialog: true,           // set to false for logout without warning dialog
                    dialogDisplayLimit: 30,       // 20 seconds for testing. Time to display the warning dialog before logout (and optional callback) in seconds. 180 = 3 Minutes
                    dialogTitle: 'Session Expiration Warning', // also displays on browser title bar
                    dialogText: 'Because you have been inactive, your session will expire in ',
                    dialogStayLoggedInButton: 'Yes, Keep Working',
                    dialogLogOutNowButton: 'No, Logout',

                    // error message if https://github.com/marcuswestin/store.js not enabled
                    errorAlertMessage: 'Please disable "Private Mode", or upgrade to a modern browser. Or perhaps a dependent file missing. Please see: https://github.com/marcuswestin/store.js',

                    // server-side session keep-alive timer
                    sessionKeepAliveTimer: 15,   // ping the server at this interval in seconds. 600 = 10 Minutes. Set to false to disable pings
                    sessionKeepAliveUrl: '' // set URL to ping - does not apply if sessionKeepAliveTimer: false
                });
            })(jQuery);

        }

    };

}();