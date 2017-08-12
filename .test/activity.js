casper.test.begin('Test Activity page', 2, function suite(test) {
    casper.start("http://localhost:8000/activity", function () {
        test.assertHttpStatus(200);
        
        test.assertExists('div #login-dropdown a');

    });

    casper.run(function () {
        test.done();
    });
});