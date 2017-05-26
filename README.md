# CakePHP Pagination Issue Test

To reproduce the pagination generating invalid sql, setup `config/app.php` and run:

```bash
vendor/bin/phpunit
```

And it should fail in `App\Test\TestCase\Model\Table\ArticlesTableTest::testPagination`

Alternatively, run:
```bash
bin/cake migrations migrate
```

And then go to [localhost/matching_test/articles](matching_test/articles) or your equivalent.

Both of these methods should fail with invalid SQL.