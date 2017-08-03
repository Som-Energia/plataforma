casper.test.begin('Test Groups all page', 4, function suite(test) {
    casper.start("http://localhost:8000/groups/all", function () {
        test.assertHttpStatus(200);
        test.assertTitle("All groups : Docker Plataforma", "Docker Plataforma page title is the one expected");
        
        test.assertExists('div #login-dropdown a');
        test.assertSelectorHasText('div #login-dropdown a', 'Log in');

    });

    casper.run(function () {
        test.done();
    });
});