casper.test.begin('Test Profile page', 2, function suite(test) {
    casper.start("http://localhost:8000/profile/admin", function () {
        test.assertHttpStatus(200);
        
        test.assertExists('div #login-dropdown a');

    });

    casper.run(function () {
        test.done();
    });
});