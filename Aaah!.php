<?php

fscanf(STDIN, "%s", $falado);
fscanf(STDIN, "%s", $pedido);

if (strlen($falado) >= strlen($pedido)) {
    print("go");
}

else {
    print("no");
}
?>