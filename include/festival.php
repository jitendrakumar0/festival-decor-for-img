
    <?php
    $dateWiseFestivs = [
        "2021-07-28" => "RakshaBandhan",
        // "2021-08-22" => "RakshaBandhan",
        "2021-07-30" => "Diwali",
        "2021-07-30" => "Holi",
    ];
    $currentdate = date('Y-m-d');
    $predate = date('Y-m-d', strtotime('-1 days', strtotime($currentdate)));
    $tommdate = date('Y-m-d', strtotime('+1 days', strtotime($currentdate)));
    $festival = 'dummy';
    if (!empty($dateWiseFestivs)) {
        foreach ($dateWiseFestivs as $key => $fest) {
            if ($currentdate == $key) {
                if (array_key_exists($predate, $dateWiseFestivs)) {
                    $festival = $fest;
                    break;
                } elseif (array_key_exists($tommdate, $dateWiseFestivs)) {
                    $festival = $fest;
                    break;
                } else {
                    if ($tommdate == $key) {
                        $festival = $fest;
                        break;
                    } elseif ($predate == $key) {
                        $festival = $fest;
                        break;
                    } else {
                        $festival = $fest;
                        break;
                    }
                }
            } elseif ($tommdate == $key) {
                if (array_key_exists($currentdate, $dateWiseFestivs)) {
                    $festival = $dateWiseFestivs[$currentdate];
                    break;
                } elseif (array_key_exists($predate, $dateWiseFestivs)) {
                    $festival = $dateWiseFestivs[$predate];
                    break;
                } else {
                    if ($tommdate == $key) {
                        $festival = $fest;
                        break;
                    } elseif ($predate == $key) {
                        $festival = $fest;
                        break;
                    } else {
                        $festival = $fest;
                        break;
                    }
                }
            } elseif ($predate == $key) {
                if (array_key_exists($currentdate, $dateWiseFestivs)) {
                    $festival = $dateWiseFestivs[$currentdate];
                    break;
                } elseif (array_key_exists($tommdate, $dateWiseFestivs)) {
                    $festival = $dateWiseFestivs[$tommdate];
                    break;
                } else {
                    if ($tommdate == $key) {
                        $festival = $fest;
                        break;
                    } elseif ($predate == $key) {
                        $festival = $fest;
                        break;
                    } else {
                        $festival = $fest;
                        break;
                    }
                }
            }
        }
    }
    ?>