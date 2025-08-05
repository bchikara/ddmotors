<?php
require_once('../src/db.php');
require_once('../templates/header.php');

// Task 1: Fetch DriveType summary
$query = "
    SELECT DriveType, ROUND(AVG(Price), 2) AS AvgPrice
    FROM motorcrossref2
    GROUP BY DriveType
    ORDER BY AvgPrice DESC
";
$stmt = $pdo->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- TASK 1: Display Table -->
<div class="max-w-2xl mx-auto mb-16">
  <h1 class="text-3xl font-bold text-blue-700 mb-6">Average Price by Drive Type</h1>
  <div class="shadow border rounded-lg overflow-x-auto">
    <table class="min-w-full bg-white divide-y divide-gray-200">
      <thead class="bg-blue-700 text-white">
        <tr>
          <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Drive Type</th>
          <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Average Price ($)</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100">
        <?php foreach ($results as $row): ?>
          <tr class="hover:bg-blue-50">
            <td class="px-6 py-4 text-gray-700"><?= htmlspecialchars($row['DriveType']) ?></td>
            <td class="px-6 py-4 text-gray-700">$<?= number_format($row['AvgPrice'], 2) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<!-- TASK 2: Toggle Tips Box -->
<button id="toggleTips" class="fixed bottom-6 right-6 bg-blue-600 text-white px-4 py-2 rounded-full shadow-lg hover:bg-blue-700 transition">
  💡 Tips
</button>

<div id="tipsBox" class="hidden fixed bottom-24 right-6 w-72 p-4 bg-white border rounded-lg shadow-md">
  <h3 class="font-semibold text-gray-800 mb-2">Choosing the Right Controller</h3>
  <ul class="list-disc pl-5 text-gray-600 text-sm space-y-1">
    <li>Match motor and controller voltage</li>
    <li>Check series vs regen compatibility</li>
    <li>Verify amperage capacity</li>
    <li>Consider waterproof options</li>
  </ul>
</div>

<?php require_once('../templates/footer.php'); ?>