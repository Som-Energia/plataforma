casper.test.begin('Test Home', 4, function suite(test) {
    casper.start("http://localhost:8000", function () {
        test.assertHttpStatus(200);
        test.assertTitle("Docker Plataforma", "Docker Plataforma page title is the one expected");
        
        test.assertExists('div #login-dropdown a');
        test.assertSelectorHasText('div #login-dropdown a', 'Log in');

    });

    casper.run(function () {
        test.done();
    });
});