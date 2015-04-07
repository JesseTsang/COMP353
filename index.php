<?php

/*
 * Toggle different calls or combination of calls (such as ManagerHomeView + storeRevenueSummaryView) for page simulation.
 */

// require_once 'views/logoutView.php';
// $app = new logoutView();

// require_once 'views/loginView.php';
// $app = new loginView();

require_once 'views/ManagerHomeView.php';
$app1 = new ManagerHomeView();
echo '</br>';

// require_once 'views/employeeHomeView.php';
// $app = new employeeHomeView();
// echo '</br>';

// require_once 'views/storeRevenueSummaryView.php';
// $app2 = new StoreRevenueSummaryView();

// require_once 'views/saleRevenueSummaryView.php';
// $app2 = new SaleRevenueSummaryView();

// require_once 'views/repairRevenueSummaryView.php';
// $app2 = new RepairRevenueSummaryView();

// require_once 'views/onlineRevenueSummaryView.php';
// $app2 = new OnlineRevenueSummaryView();

// require_once 'views/HistoricalRevenueView.php';
// $app2 = new HistoricalRevenueView();

// require_once 'views/EmployeeStatisticsView.php';
// $app2 = new EmployeeStatisticsView();

// require_once 'views/EmployeeStatisticsViewAfter.php';
// $app2 = new EmployeeStatisticsViewAfter();

// require_once 'views/NewTicketView.php';
// $app2 = new NewTicketView();

// require_once 'views/transactionCompleteView.php';
// $app2 = new TransactionCompleteView();

// require_once 'views/transactionFailureView.php';
// $app2 = new TransactionFailureView();

require_once 'views/inventorySearchView.php';
$app2 = new InventorySearchView();

// require_once 'views/inventorySearchViewAfter.php';
// $app2 = new InventorySearchViewAfter();

// require_once 'views/modifyEmployeeDetailsView.php';
// $app2 = new ModifyEmployeeDetailsView();
?>

<!-- Hello! You're in the landing index.php! -->