<?php
function nameClass($currentPage, $departments) {
    return ($currentPage === $departments . ".php") ? "selected" : "";
}

function departments($currentPage) {
    $arrDepartments = array("Птица", "Колбаса", "Полуфабрикаты", "Консервы", "Рыба", "Яйца", "Цыплята", "Полный Заказ", "Админка");

    for ($i = 0; $i < count($arrDepartments); $i++) {
        echo
            "<li>" .
                "<a " .
                    "href=" . "'" . BASE_URL . $arrDepartments[$i] . ".php" . "'" .
                    "class=" . "'" . nameClass($currentPage, $arrDepartments[$i]) . "'" .
                ">" .
                    $arrDepartments[$i] .
                "</a>" .
            "</li>";
    }
};
?>

<nav>
    <ul>
        <?php departments($currentPage)?>
    </ul>
</nav>



