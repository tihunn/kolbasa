<?php
// Define an array to store table data

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
<form>
    <table class="u-table-entity u-table-entity-1">
        <colgroup>
            <col width="28.1%">
            <col width="30.6%">
            <col width="10.8%">
            <col width="30.5%">
        </colgroup>
        <thead class="u-black u-table-header u-table-header-1">
        <tr>
            <th class="u-table-cell">Артикул</th>
            <th class="u-table-cell"> Название</th>
            <th class="u-table-cell">Единица измерения</th>
            <th class="u-table-cell">Количество</th>
        </tr>
        </thead>
        <tbody class="u-table-alt-palette-1-light-3 u-table-body">
        <?php foreach ($tableData as $article => $data): ?>
            <tr>
                <td class="u-table-cell"><?php echo $article; ?></td>
                <td class="u-table-cell"><?php echo $data[0]; ?></td>
                <td class="u-table-cell"><?php echo $data[1]; ?></td>
                <td class="u-table-cell">
                    <label>
                        <input type="number" name="<?php echo $article; ?>" value="<?php echo $data[2]; ?>" min="0" max="1000" step="1">
                    </label>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</form>
</body>
</html>