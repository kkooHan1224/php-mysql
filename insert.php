<?php
    $conn = mysqli_connect("localhost", "root", "qwerasdf", "opentutorials");
    $sql = "
        INSER INTO topic (
            title,
            description,
            created
        ) VALUES (
            'MySQL',
            'MySQL is ....',
            NOW()
        )";
    mysqli_query($conn, $sql);
    echo mysqli_error($conn);
    // mysqli_query($conn, "
    //     INSERT INTO topic (
    //         title,
    //         description,
    //         created
    //     ) VALUES (
    //         'MySQL',
    //         'MySQL is ....',
    //         NOW()
    // )");
?>