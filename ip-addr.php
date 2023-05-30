<?php
$ip_addr = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
$show_flag = ($ip_addr == '127.0.0.1');
?>
<!DOCTYPE html>
<html data-background="secondary" data-scheme="dark">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocas-ui/4.0.2/tocas.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700&display=swap" rel="stylesheet" />
        <title>檔案列表 - Tocas UI 範例</title>
    </head>
    <body style="overflow: hidden">
        <div class="ts-space is-huge"></div>
        <div class="ts-container is-narrow">
            <div class="ts-breadcrumb is-stepped is-divided">
                <div class="item">我的雲端</div>
                <div class="item"><span class="ts-icon is-folder-icon is-end-spaced"></span>文件</div>
                <div class="item is-active"><?= $show_flag ? '私人' : '公開' ?></div>
            </div>
            <div class="ts-space"></div>
            <div class="ts-grid is-relaxed">
                <div class="column is-10-wide">
                    <div class="ts-box" style="height: 100vh">
                        <div class="ts-menu is-small is-start-icon">
                            <div class="item">
                                <span class="ts-icon is-regular is-file-image-icon"></span>
                                18423989_1701707643203568_1308196091257630021_n.jpg
                            </div>
                            <div class="ts-divider"></div>
<?php if ($show_flag) { ?>
							<div class="item is-selected">
                                <span class="ts-icon is-regular is-file-lines-icon"></span>
                                flag.txt
                            </div>
							<div class="ts-divider"></div>
<?php } ?>
                            <div class="item">
                                <span class="ts-icon is-regular is-file-icon"></span>
                                How-to-play-CTF.pdf
                            </div>
                            <div class="ts-divider"></div>
							<div class="item<?= $show_flag ? '' : ' is-selected' ?>">
                                <span class="ts-icon is-regular is-file-image-icon"></span>
                                Screen Shot 2023-05-13 at 14.23.40.png
                            </div>
                            <div class="ts-divider"></div>
                            <div class="item">
                                <span class="ts-icon is-regular is-file-icon"></span>
                                stegsolve.jar
                            </div>
                            <div class="ts-divider"></div>
                            <div class="item">
                                <span class="ts-icon is-regular is-file-icon"></span>
                                Windows 10.pvm
                            </div>
                            <div class="ts-divider"></div>
                            <div class="item">
                                <span class="ts-icon is-regular is-file-lines-icon"></span>
                                測試檔案.txt
                            </div>
                            <div class="ts-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="column is-6-wide">
                    <div class="ts-box">
                        <div class="ts-content is-tertiary is-vertically-very-padded is-center-aligned">
                            <span class="ts-icon is-regular is-file-<?= $show_flag ? 'lines' : 'image' ?>-icon" style="font-size: 3rem"></span>
                        </div>
                        <div class="ts-divider"></div>
                        <div class="ts-content is-dense">
							<div class="ts-header is-heavy"><?= $show_flag ? 'flag.txt' : 'Screen Shot 2023-05-13 at 14.23.40.png' ?></div>
                        </div>
                        <div class="ts-divider"></div>
                        <div class="ts-content">
                            <div class="ts-row">
                                <div class="column" style="line-height: 1">
                                    <span class="ts-icon is-clock-icon"></span>
                                </div>
                                <div class="column">
                                    <div class="ts-text is-label">最後開啟時間</div>
                                    <div class="ts-text is-description"><?= $show_flag ? '2023-05-29 21:35' : '2023-05-27 18:42' ?></div>
                                </div>
                            </div>
                            <div class="ts-space"></div>
                            <div class="ts-row">
                                <div class="column" style="line-height: 1">
                                    <span class="ts-icon is-user-icon"></span>
                                </div>
                                <div class="column">
                                    <div class="ts-text is-label">檔案擁有者</div>
                                    <div class="ts-text is-description"><?= $show_flag ? 'Sean Wei' : 'Yami Odymel' ?></div>
                                </div>
                            </div>
                            <div class="ts-space"></div>
                            <div class="ts-row">
                                <div class="column" style="line-height: 1">
                                    <span class="ts-icon is-lock-icon"></span>
                                </div>
                                <div class="column">
                                    <div class="ts-text is-label">檔案驗證碼</div>
                                    <div class="ts-text is-description"><?= $show_flag ? 'da4c0f354b5407d0' : 'dQw4w9WgXcQ' ?></div>
                                </div>
                            </div>
<?php if ($show_flag) { ?>
                            <div class="ts-space"></div>
                            <div class="ts-row">
                                <div class="column" style="line-height: 1">
                                    <span class="ts-icon is-file-icon"></span>
                                </div>
                                <div class="column">
                                    <div class="ts-text is-label">檔案內容</div>
									<div class="ts-text is-description">FLAG{X_f0rW@rDeD_f0r_1$_1n5eCur3}</div>
                                </div>
                            </div>
<?php } ?>
                        </div>
                    </div>
                    <div class="ts-space is-small"></div>
                    <div class="ts-meta is-small is-end-aligned is-secondary">
                        <div class="item">關於</div>
                        <div class="item">登入</div>
                        <div class="item">網路硬碟</div>
                    </div>
                    <div class="ts-meta is-small is-end-aligned is-secondary">
						<div class="item">Your IP address: <?= $ip_addr ?></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
