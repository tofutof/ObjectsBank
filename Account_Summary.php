<?php
require_once 'classes/Customer.php';

$accounts = [
    new Account(20489446, 'Checking', -20.00),
    new Account(20148896, 'Savings', 380.00)
];


$customer = new Customer('Ivy', 'Stone', $accounts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mercury Bank | Customer Portal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'Extra/header.php'; ?>

<div class="mercury-container">
    <h2>Customer: <?= $customer->getFullName() ?></h2>

    <table>
        <thead>
            <tr>
                <th>ACCOUNT NUMBER</th>
                <th>ACCOUNT TYPE</th>
                <th>BALANCE</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($customer->accounts as $account): 
            ?>
                <tr>
                    <td><?= $account->number ?></td>
                    <td><?= $account->type ?></td>

                    <?php
                    if ($account->balance >= 0) {
                        $class = 'credit'; 
                    } else {
                        $class = 'overdrawn'; 
                    }
                    ?>

                    <td class="<?= $class ?>">PHP <?= number_format($account->balance, 2) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'Extra/footer.php'; ?>

</body>
</html>