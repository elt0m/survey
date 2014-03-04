<?php
define("MONTH_OLD", "ヶ月");
define("YEAR_OLD", "歳");
define("YEAR_CHAR", "年");
define("MONTH_CHAR", "月");
define("DAY_CHAR", "日");

define("PASSWORD_MIN_LENGTH", 5);
define("CERTIFICATION_CODE_MIN_LENGTH", 5);
define("EMAIL_ADMIN", "do_not_reply@halope.jp");
define("MAIL_FAIL_MSG", "メール送信は失敗しました。");
define("MAIL_NOT_EXIST", "このメールは存在しません。");

// mail
define("MAILER", "mail");
define("MAIL_FORMAT", "html");

// forgot password
define("FORGOT_MAIL_FILE", "forgotMail.txt");
define("FORGOT_MAIL_SUBJECT", "[スマペ] パスワード再発行のお知らせ");

// register
define("REGISTER_MAIL_FILE", "registerMail.txt");
define("REGISTER_MAIL_SUBJECT", "[スマペ] ユーザー登録のお知らせ");

// certificate
define("CERTIFICATE_MAIL_FILE", "certificateHospitalMail.txt");
define("CERTIFICATE_MAIL_SUBJECT", "[スマペ] 認証コードのお知らせ");

// change password
define("CHANGE_PASSWORD_MAIL_FILE", "changePasswordMail.txt");
define("CHANGE_PASSWORD_MAIL_SUBJECT", "[スマペ] パスワード変更完了のお知らせ");

// avatar directory
define("AVATAR_DIRECTORY", WWW_ROOT_ABSOL . "userdata" . DS . "avatar" . DS);

// banner directory
define("BANNER_DIRECTORY", APP_DIR . DS . WEBROOT_DIR . DS . "userdata/banner/");

// hospital directory
define("HOSPITAL_DIRECTORY", APP_DIR . DS . WEBROOT_DIR . DS . "userdata/hospital/");

// hospital announcement directory
define("HOSPITAL_ANNOUNCEMENT_DIRECTORY", APP_DIR . DS . WEBROOT_DIR . DS . "userdata/hospital_announcement/");

// hospital detail directory
define("HOSPITAL_DETAIL_DIRECTORY", APP_DIR . DS . WEBROOT_DIR . DS . "userdata/hospital_detail/");

// announcement directory
define("ANNOUNCEMENT_DIRECTORY", APP_DIR . DS . WEBROOT_DIR . DS . "userdata/announcement/");

// announcement banner directory
define("ANNOUNCEMENT_BANNER_DIRECTORY", APP_DIR . DS . WEBROOT_DIR . DS . "userdata/announcement_banner/");

// message directory
define("MESSAGE_DIRECTORY", APP_DIR . DS . WEBROOT_DIR . DS . "userdata/message/");

// avatar size
define("AVATAR_WIDTH", "300");
define("AVATAR_HEIGHT", "150");

// message
define("ERROR_001", "未来日付は入力できません");
define("ERROR_002", "1から47の間で指定して下さい");
define("ERROR_003", "パスワードは最低5文字です");
define("ERROR_004", "メールアドレスを入力して下さい");
define("ERROR_005", "メールアドレスが不正です");
define("ERROR_006", "メールアドレスは既に登録されています");
define("ERROR_007", "名前を入力してください");
define("ERROR_008", "最大16文字まで入力可能です");
define("ERROR_009", "過去日付は入力できません");
define("ERROR_010", "有効な日付を入力して下さい");
define("ERROR_011", "数字を入力して下さい");
define("ERROR_012", "最大32文字まで入力可能です");
define("ERROR_013", "最大64文字まで入力可能です");
define("ERROR_014", "性別を選択して下さい");
define("ERROR_015", "小数点第一位まで入力可能です。");
define("ERROR_016", "地域を選択してください。");
define("ERROR_017", "認証コードが不正です。");
define("ERROR_018", "認証コードの期限が切れています。再度、認証コードを発行しなおして下さい。");
?>