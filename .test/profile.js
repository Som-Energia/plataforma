casper.test.begin('Test Profile page', 4, function suite(test) {
    casper.start("http://localhost:8000/profile/admin", function () {
        test.assertHttpStatus(200);
        test.assertTitle("Admin : Docker Plataforma", "Docker Plataforma page title is the one expected");
        
        test.assertExists('div #login-dropdown a');
        test.assertSelectorHasText('div #login-dropdown a', 'Log in');

    });

    casper.run(function () {
        test.done();
    });
});