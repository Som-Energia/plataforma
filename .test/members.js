casper.test.begin('Test Members page', 2, function suite(test) {
    casper.start("http://localhost:8000/members", function () {
        test.assertHttpStatus(200);
        test.assertExists('div #login-dropdown a');
    });

    casper.run(function () {
        test.done();
    });
});


casper.test.begin('Test Members page newest', 2, function suite(test) {
    casper.start("http://localhost:8000/members/newest", function () {
        test.assertHttpStatus(200);
        test.assertExists('div #login-dropdown a');
    });

    casper.run(function () {
        test.done();
    });
});

casper.test.begin('Test Members page alpha', 2, function suite(test) {
    casper.start("http://localhost:8000/members/alpha", function () {
        test.assertHttpStatus(200);
        test.assertExists('div #login-dropdown a');
    });

    casper.run(function () {
        test.done();
    });
});

casper.test.begin('Test Members page popular', 2, function suite(test) {
    casper.start("http://localhost:8000/members/popular", function () {
        test.assertHttpStatus(200);
        test.assertExists('div #login-dropdown a');
    });

    casper.run(function () {
        test.done();
    });
});

casper.test.begin('Test Members page online', 2, function suite(test) {
    casper.start("http://localhost:8000/members/online", function () {
        test.assertHttpStatus(200);
        test.assertExists('div #login-dropdown a');
    });

    casper.run(function () {
        test.done();
    });
});