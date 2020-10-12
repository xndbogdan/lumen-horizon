<?php

// Protected API routes
$router->group([
    'prefix' => 'api',
], function ($router) {
    // Dashboard Routes...
    $router->get('/stats', 'DashboardStatsController@index')->name('horizon.stats.index');

    // Workload Routes...
    $router->get('/workload', 'WorkloadController@index')->name('horizon.workload.index');

    // Master Supervisor Routes...
    $router->get('/masters', 'MasterSupervisorController@index')->name('horizon.masters.index');

    // Monitoring Routes...
    $router->get('/monitoring', 'MonitoringController@index')->name('horizon.monitoring.index');
    $router->post('/monitoring', 'MonitoringController@store')->name('horizon.monitoring.store');
    $router->get('/monitoring/{tag}', 'MonitoringController@paginate')->name('horizon.monitoring-tag.paginate');
    $router->delete('/monitoring/{tag}', 'MonitoringController@destroy')->name('horizon.monitoring-tag.destroy');

    // Job Metric Routes...
    $router->get('/metrics/jobs', 'JobMetricsController@index')->name('horizon.jobs-metrics.index');
    $router->get('/metrics/jobs/{id}', 'JobMetricsController@show')->name('horizon.jobs-metrics.show');

    // Queue Metric Routes...
    $router->get('/metrics/queues', 'QueueMetricsController@index')->name('horizon.queues-metrics.index');
    $router->get('/metrics/queues/{id}', 'QueueMetricsController@show')->name('horizon.queues-metrics.show');

    // Batches Routes...
    $router->get('/batches', 'BatchesController@index')->name('horizon.jobs-batches.index');
    $router->get('/batches/{id}', 'BatchesController@show')->name('horizon.jobs-batches.show');
    $router->post('/batches/retry/{id}', 'BatchesController@retry')->name('horizon.jobs-batches.retry');

    // Job Routes...
    $router->get('/jobs/pending', 'PendingJobsController@index')->name('horizon.pending-jobs.index');
    $router->get('/jobs/completed', 'CompletedJobsController@index')->name('horizon.completed-jobs.index');
    $router->get('/jobs/failed', 'FailedJobsController@index')->name('horizon.failed-jobs.index');
    $router->get('/jobs/failed/{id}', 'FailedJobsController@show')->name('horizon.failed-jobs.show');
    $router->post('/jobs/retry/{id}', 'RetryController@store')->name('horizon.retry-jobs.show');
    $router->get('/jobs/{id}', 'JobsController@show')->name('horizon.jobs.show');
});
