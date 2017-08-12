casper.test.begin('Test Groups page all', 2, function suite(test) {
    casper.start("http://localhost:8000/groups/all", function () {
        test.assertHttpStatus(200);       
        test.assertExists('div #login-dropdown a');
    });

    casper.run(function () {
        test.done();
    });
});

casper.test.begin('Test Groups page all filter all', 2, function suite(test) {
    casper.start("http://localhost:8000/groups/all?filter=all", function () {
        test.assertHttpStatus(200);       
        test.assertExists('div #login-dropdown a');
    });

    casper.run(function () {
        test.done();
    });
});

casper.test.begin('Test Groups page all filter all', 2, function suite(test) {
    casper.start("http://localhost:8000/groups/all?filter=all", function () {
        test.assertHttpStatus(200);       
        test.assertExists('div #login-dropdown a');
    });

    casper.run(function () {
        test.done();
    });
});