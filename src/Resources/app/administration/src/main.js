Shopware.Application.getContainer('init').httpClient
    .get('/swag-training/admin-api-hello-world')
    .then((response) => {
        // eslint-disable-next-line no-console
        console.log('SwagTrainingAdminApiHelloWorld: Response', response.data);
    });

