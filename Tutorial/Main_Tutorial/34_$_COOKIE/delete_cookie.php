<?php

    $cookie_name="User";

    // now to delete cookie we will going to pass empty string value
    // and also we will set the previous expire time it means this cookie should get delete before present time
    setcookie($cookie_name, "", time() - (86400), '/');
