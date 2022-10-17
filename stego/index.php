<!DOCTYPE html>
<html data-scheme="dark">
    <head>
        <meta charset="UTF-8" />
		<title>動態時軸 - Tocas UI 範例</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocas-ui/4.0.2/tocas.min.css">
        <style type="text/css">
            .navbar .item {
                font-size: 22px;
                padding-left: 3rem;
                padding-right: 3rem;
            }
            .navbar .item:not(.is-active) {
                opacity: 0.5;
            }
        </style>
    </head>
    <body>
        <div class="ts-app-layout is-full is-vertical">
            <div class="cell">
                <div class="ts-container">
                    <div class="navbar ts-tab is-center-aligned">
                        <div class="item is-active">
                            <span class="ts-icon is-house-icon"></span>
                        </div>
                        <div class="item">
                            <span class="ts-icon is-circle-user-icon"></span>
                        </div>
                        <div class="item">
                            <span class="ts-icon is-video-icon"></span>
                        </div>
                        <div class="item">
                            <span class="ts-icon is-gamepad-icon"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cell is-secondary is-fluid is-scrollable">
                <div class="ts-space is-large"></div>
                <div class="ts-container">
                    <div class="ts-grid is-relaxed">
                        <div class="column is-3-wide">
                            <div style="position: sticky; top: 1rem">
                                <div class="ts-divider is-section"></div>
                                <div class="ts-wrap is-middle-aligned">
                                    <div class="ts-avatar is-circular">
                                        <img src="/assets/img/user.png" />
                                    </div>
                                    <div class="ts-text is-heavy">Yami Odymel</div>
                                </div>
                                <div class="ts-divider is-section"></div>
                                <div class="ts-menu is-start-icon is-separated">
                                    <div href="#!" class="item"> <span class="ts-icon is-user-group-icon"></span> 朋友 </div>
                                    <div href="#!" class="item"> <span class="ts-icon is-bookmark-icon"></span> 收藏內容 </div>
                                    <div href="#!" class="item"> <span class="ts-icon is-store-icon"></span> 市集</div>
                                    <div href="#!" class="item"> <span class="ts-icon is-flag-icon"></span> 粉絲專頁</div>
                                    <div href="#!" class="item"> <span class="ts-icon is-check-to-slot-icon"></span> 投票</div>
                                    <div class="ts-divider"></div>
                                    <div class="item"> <span class="ts-icon is-gear-icon"></span> 設定 </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-9-wide">
                            <div class="ts-segment">
                                <div class="ts-row">
                                    <div class="column">
                                        <div class="ts-avatar is-large is-circular">
                                            <img src="/assets/img/user.png" />
                                        </div>
                                    </div>
                                    <div class="column is-fluid">
                                        <div class="ts-input is-fluid">
                                            <textarea rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="ts-divider is-section"></div>
                                <div class="ts-row">
                                    <div class="column is-fluid">
                                        <button class="ts-button is-dense is-start-icon is-ghost is-fluid">
                                            <span class="ts-icon is-image-icon"></span>
                                            照片 / 多媒體
                                        </button>
                                    </div>
                                    <div class="column is-fluid">
                                        <button class="ts-button is-dense is-start-icon is-ghost is-fluid">
                                            <span class="ts-icon is-users-icon"></span>
                                            標記好友
                                        </button>
                                    </div>
                                    <div class="column is-fluid">
                                        <button class="ts-button is-dense is-start-icon is-ghost is-fluid">
                                            <span class="ts-icon is-face-smile-icon"></span>
                                            感受 / 活動
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="ts-space"></div>
                            <div class="ts-segment">
                                <div class="ts-row">
                                    <div class="column">
                                        <div class="ts-avatar is-large is-circular">
                                            <img src="/assets/img/user.png" />
                                        </div>
                                    </div>
                                    <div class="column is-fluid">
                                        <div style="line-height: 1.5">
                                            <div class="ts-text is-heavy">Yami Odymel</div>
                                            <div class="ts-meta is-small is-secondary">
                                                <div class="item">
                                                    <div class="ts-icon is-earth-asia-icon is-end-spaced"></div>
                                                    公開
                                                </div>
                                                <div href="#!" class="item">5 分鐘前</div>
                                            </div>
                                        </div>
                                        <div class="ts-space is-small"></div>
                                        Ken Wong 沒事推什麼 King Exit 的坑，<br />
                                        要是我 TeaMeow 今年寫不出來，<br />
                                        就是你給我的精神攻擊害的
                                        <div class="ts-space is-small"></div>
                                        <div class="ts-image is-rounded">
                                            <img src="/assets/img/stego-cat.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class="ts-divider is-section"></div>
                                <div class="ts-row">
                                    <div class="column is-fluid">
                                        <button class="ts-button is-dense is-start-icon is-ghost is-fluid">
                                            <span class="ts-icon is-thumbs-up-icon is-regular"></span>
                                            讚
                                        </button>
                                    </div>
                                    <div class="column is-fluid">
                                        <button class="ts-button is-dense is-start-icon is-ghost is-fluid">
                                            <span class="ts-icon is-comment-icon is-regular"></span>
                                            留言
                                        </button>
                                    </div>
                                    <div class="column is-fluid">
                                        <button class="ts-button is-dense is-start-icon is-ghost is-fluid">
                                            <span class="ts-icon is-share-from-square-icon is-regular"></span>
                                            分享
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="ts-space"></div>
                            <div class="ts-segment">
                                <div class="ts-row">
                                    <div class="column">
                                        <div class="ts-avatar is-large is-circular">
                                            <img src="/assets/img/user.png" />
                                        </div>
                                    </div>
                                    <div class="column is-fluid">
                                        <div style="line-height: 1.5">
                                            <div class="ts-text is-heavy">Yami Odymel</div>
                                            <div class="ts-meta is-small is-secondary">
                                                <div class="item">
                                                    <div class="ts-icon is-earth-asia-icon is-end-spaced"></div>
                                                    公開
                                                </div>
                                                <div href="#!" class="item">12 分鐘前</div>
                                            </div>
                                        </div>
                                        <div class="ts-space is-small"></div>
                                        敬告所有尤米爾的子民，<br />
                                        我的名字是艾連葉卡。<br />
                                        正透過始祖巨人的力量與所有尤米爾的子民對話。
                                        <div class="ts-space is-small"></div>
                                    </div>
                                </div>
                                <div class="ts-divider is-section"></div>
                                <div class="ts-row">
                                    <div class="column is-fluid">
                                        <button class="ts-button is-dense is-start-icon is-ghost is-fluid">
                                            <span class="ts-icon is-thumbs-up-icon is-regular"></span>
                                            讚
                                        </button>
                                    </div>
                                    <div class="column is-fluid">
                                        <button class="ts-button is-dense is-start-icon is-ghost is-fluid">
                                            <span class="ts-icon is-comment-icon is-regular"></span>
                                            留言
                                        </button>
                                    </div>
                                    <div class="column is-fluid">
                                        <button class="ts-button is-dense is-start-icon is-ghost is-fluid">
                                            <span class="ts-icon is-share-from-square-icon is-regular"></span>
                                            分享
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-4-wide">
                            <div class="ts-segment">
                                <div class="ts-header is-heavy">限時動態</div>
                                <div class="ts-space"></div>
                                <div class="ts-wrap">
                                    <div class="ts-avatar is-large is-circular">
                                        <img src="/assets/img/user.png" />
                                    </div>
                                    <div class="ts-avatar is-large is-circular">
                                        <img src="/assets/img/user.png" />
                                    </div>
                                    <div class="ts-avatar is-large is-circular">
                                        <img src="/assets/img/user.png" />
                                    </div>
                                </div>
                            </div>
                            <div class="ts-space"></div>
                            <div class="ts-segment">
                                <div class="ts-header is-heavy">最近看過的商品</div>
                                <div class="ts-space"></div>
                                <div class="ts-grid is-2-columns">
                                    <div class="column">
                                        <div class="ts-image is-rounded" style="max-width: 450px">
                                            <img src="/assets/img/4-3.png" />
                                            <div class="ts-mask is-secondary is-bottom">
                                                <div class="ts-content is-compact is-start-aligned">
                                                    <div class="ts-badge is-secondary">NT$ 2,500</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ts-image is-rounded" style="max-width: 450px">
                                            <img src="/assets/img/4-3.png" />
                                            <div class="ts-mask is-secondary is-bottom">
                                                <div class="ts-content is-compact is-start-aligned">
                                                    <div class="ts-badge is-secondary">NT$ 5,500</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ts-image is-rounded" style="max-width: 450px">
                                            <img src="/assets/img/4-3.png" />
                                            <div class="ts-mask is-secondary is-bottom">
                                                <div class="ts-content is-compact is-start-aligned">
                                                    <div class="ts-badge is-secondary">NT$ 100</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ts-image is-rounded" style="max-width: 450px">
                                            <img src="/assets/img/4-3.png" />
                                            <div class="ts-mask is-secondary is-bottom">
                                                <div class="ts-content is-compact is-start-aligned">
                                                    <div class="ts-badge is-secondary">NT$ 320</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ts-space"></div>
                            <div class="ts-segment">
                                <div class="ts-header is-heavy">宣傳廣告</div>
                                <div class="ts-space"></div>
                                <div class="ts-image is-rounded">
                                    <img src="/assets/img/stego-exif.png" />
                                </div>
                                <div class="ts-space"></div>
                                <div class="ts-text is-bold">神奇麵包屋</div>
                                <div class="ts-text is-description">這會是你史上吃過最好吃的麵包，比米奇妙妙屋還要神奇！</div>
                            </div>
                            <div class="ts-space is-small"></div>
                            <div class="ts-meta is-small is-secondary is-center-aligned">
                                <div href="#!" class="item">服務條款</div>
                                <div href="#!" class="item">隱私政策</div>
                                <div href="#!" class="item">協助工具</div>
                                <div href="#!" class="item">廣告資訊</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ts-space is-large"></div>
            </div>
        </div>
		<script src="/assets/js/clarity.js"></script>
    </body>
</html>
