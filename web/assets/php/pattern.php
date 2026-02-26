<?php 
    // Solo letras y espacio
    CONST ONLY_LETTER = '[A-Za-záéíóúÁÉÍÓÚ\s]+$';

    // Cualquier caracter excepto numeros
    CONST ONLY_LETTER_SPECIAL = '[^0-9]+$';

    // Cualquier caracter excepto especiales
    CONST LETTER_NUMBER = '[A-Za-z0-9]+$';

    // Solo numeros sin espacio
    CONST ONLY_NUMBER = '[0-9]+';

    // Solo numeros, espacio, mas, meno, punto y coma
    CONST ONLY_NUMBER_EXTEND = '[0-9/.,+-\s]+$';

    // Solo numero (04101234567) o (0410-1234567)
    CONST PHONE_PATTERN = '[0-9]{11}|[0-9]{4}(-| )[0-9]{7}'; 

    // Letras y números; mínimo 8 caracteres, 1 letra mayúscula y una minúscula 
    CONST PASS_PATTERN = '(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}';


?>