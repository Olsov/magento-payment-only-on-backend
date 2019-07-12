# magento-payment-only-on-backend
Payment method only for backend magento 2.*

After that - make this steps

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
php bin/magento setup:di:compile
php bin/magento indexer:reindex
php bin/magento cache:flush
php bin/magento cache:clean
```