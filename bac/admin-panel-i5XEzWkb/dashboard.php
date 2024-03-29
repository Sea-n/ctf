<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.rawgit.com/TeaMeow/TocasUI/2.3.2/dist/tocas.css" rel='stylesheet'>
    <script src="https://cdn.rawgit.com/TeaMeow/TocasUI/2.3.2/dist/tocas.js"></script>
    <title>管理者介面 | Tocas UI</title>
    <style type="text/css">
        html, body {
            height: 100%;
        }
        .pusher {
            background-color: rgb(250, 250, 250);
        }
    </style>
</head>
<body>
    <!-- 左側邊欄 -->
    <div class="ts left vertical fluid inverted visible menu sidebar">
        <!-- 搜尋欄位 -->
        <div class="fitted item">
            <div class="ts icon fluid basic borderless inverted input">
                <input type="text" placeholder="搜尋">
                <i class="search inverted link icon"></i>
            </div>
        </div>
        <!-- / 搜尋欄位 -->

        <!-- 個人資料項目 -->
        <div class="center aligned item">
            <img class="ts tiny circular image" src="https://x.nctu.app/assets/img/avatar.jpg">
            <br>
            <br>
            <div>管理者</div>
        </div>
        <!-- / 個人資料項目 -->

        <!-- 使用者管理 -->
        <div class="item">
            <i class="users icon"></i>
            使用者管理
            <div class="ts label">23</div>
            <div class="menu">
                <a class="item">搜尋</a>
                <a class="item">新增</a>
                <a class="item">移除</a>
            </div>
        </div>
        <!-- / 使用者管理 -->

        <!-- 網站管理 -->
        <div class="item">
            <i class="setting icon"></i>
            網站管理
            <div class="menu">
                <a class="item">偏好設定</a>
                <a class="item">系統優化</a>
                <a class="item">安全防護</a>
            </div>
        </div>
        <!-- / 網站管理 -->

        <!-- 管理文章 -->
        <a href="#!" class="item">
            <i class="newspaper icon"></i>
            管理文章
        </a>
        <!-- / 管理文章 -->

        <!-- 回報處理 -->
        <a href="#!" class="item">
            <i class="flag icon"></i>
            回報處理
        </a>
        <!-- / 回報處理 -->

        <!-- 底部選單 -->
        <div class="bottom menu">
            <!-- 登出 -->
            <a href="../" class="item">
                <i class="sign out icon"></i>
                登出
            </a>
            <!-- / 登出 -->
        </div>
        <!-- / 底部選單 -->
    </div>
    <!-- / 左側邊欄 -->

    <!-- 可擠壓式的推動容器 -->
    <div class="squeezable pusher">
        <!-- 警告訊息 -->
        <div class="ts fluid icon positive message">
            <div class="ts narrow container">
                <button class="ts close button"></button>
                <i class="notice circle icon"></i>
                <div class="content">
                    <div class="header">
                        恭喜成功破關！
                    </div>
					<p>FLAG{BrOk3N_ACcE5S_C0NtRo1}</p>
                </div>
            </div>
        </div>
        <!-- / 警告訊息 -->

        <br>

        <!-- 主要容器 -->
        <div class="ts narrow container">
            <div class="ts relaxed grid">
                <!-- 標題欄位 -->
                <div class="sixteen wide column">
                    <h3 class="ts header">
                        儀表板
                        <div class="sub header">從這裡快速檢視您的網站狀態。</div>
                    </h3>
                </div>
                <!-- / 標題欄位 -->

                <!-- 大略卡片欄位 -->
                <div class="sixteen wide column">
                    <div class="ts three cards">
                        <!-- 本月拜訪次數 -->
                        <div class="ts card">
                            <div class="content">
                                <!-- 統計數據 -->
                                <div class="ts left aligned statistic">
                                    <div class="value">
                                        42,689
                                        <div class="increment">32</div>
                                    </div>
                                    <div class="label">本月拜訪次數</div>
                                </div>
                                <!-- / 統計數據 -->
                            </div>
                            <div class="symbol">
                                <i class="eye icon"></i>
                            </div>
                        </div>
                        <!-- / 本月拜訪次數 -->

                        <!-- 總會員數 -->
                        <div class="ts card">
                            <div class="content">
                                <!-- 統計數據 -->
                                <div class="ts left aligned statistic">
                                    <div class="value">
                                        8,652
                                        <div class="increment">351</div>
                                    </div>
                                    <div class="label">總會員數</div>
                                </div>
                                <!-- / 統計數據 -->
                            </div>
                            <div class="symbol">
                                <i class="users icon"></i>
                            </div>
                        </div>
                        <!-- / 總會員數 -->

                        <!-- 平均在線分鐘數 -->
                        <div class="ts card">
                            <div class="content">
                                <!-- 統計數據 -->
                                <div class="ts left aligned statistic">
                                    <div class="value">
                                        3
                                        <div class="decrement">14</div>
                                    </div>
                                    <div class="label">平均在線分鐘數</div>
                                </div>
                                <!-- / 統計數據 -->
                            </div>
                            <div class="symbol">
                                <i class="time icon"></i>
                            </div>
                        </div>
                        <!-- / 平均在線分鐘數 -->
                    </div>

                    <!-- 區隔線 -->
                    <div class="ts section divider"></div>
                    <!-- / 區隔線 -->
                </div>
                <!-- / 大略卡片欄位 -->

                <!-- 左側雜項欄位 -->
                <div class="ten wide column">
                    <div class="ts top attached info segment">
                        <div class="ts large header">最新會員清單</div>
                    </div>
                    <div class="ts attached segment">
                        <table class="ts very basic table">
                            <thead>
                                <tr>
                                    <th>使用者名稱</th>
                                    <th>電子郵件信箱</th>
                                    <th>生日</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="disabled">
                                    <td>yamiodymel</td>
                                    <td><em>(此帳號已被刪除)</em></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>mac0017817</td>
									<td>mac0017817@gahoo.io</td>
                                    <td>1998/07/13</td>
                                </tr>
                                <tr>
                                    <td>shiroteacat</td>
									<td>shiroteacat@karator.com</td>
                                    <td>2000/09/14</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ts bottom attached right aligned segment">
                        <div class="ts small buttons">
                            <div class="ts icon button">
                                <i class="left arrow icon"></i>
                            </div>
                            <div class="ts button">
                                1
                            </div>
                            <div class="ts button">
                                2
                            </div>
                            <div class="ts button">
                                ...
                            </div>
                            <div class="ts button">
                                7
                            </div>
                            <div class="ts button">
                                8
                            </div>
                            <div class="ts button">
                                9
                            </div>
                            <div class="ts icon button">
                                <i class="right arrow icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="ts top attached info segment">
                        <div class="ts large header">
                            管理員留言板
                            <span class="ts right floated horizontal warning label">2 則新留言</span>
                        </div>
                    </div>
                    <div class="ts attached segment">
                        <div class="ts speeches">
                            <div class="left pointing speech">
                                <div class="avatar">
                                    <img src="https://www.gravatar.com/avatar/a?s=64&d=identicon">
                                </div>
                                <div class="content">
                                    <div class="description">
                                        記得友善發言！
                                    </div>
                                    <div class="meta">
                                        <div class="item">12:33 PM</div>
                                        <div class="item">已讀</div>
                                    </div>
                                </div>
                            </div>
                            <div class="left pointing speech">
                                <div class="avatar">
                                    <img src="https://www.gravatar.com/avatar/b?s=64&d=identicon">
                                </div>
                                <div class="content">
                                    <div class="description">
                                        才不管逆雷～
                                    </div>
                                    <div class="meta">
                                        <div class="item">12:33 PM</div>
                                        <div class="item">已讀</div>
                                    </div>
                                </div>
                            </div>
                            <div class="right pointing speech">
                                <div class="content">
                                    <div class="description">
                                        勒～
                                    </div>
                                    <div class="meta">
                                        <div class="item">12:33 PM</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ts bottom attached fitted segment">
                        <div class="ts fluid borderless input">
                            <input type="text" placeholder="輸入留言⋯⋯">
                        </div>
                    </div>
                </div>
                <!-- / 左側雜項欄位 -->

                <!-- 右側雜項欄位 -->
                <div class="six wide column">
                    <!-- 系統佇列 -->
                    <div class="ts top attached info segment">
                        <div class="ts large header">系統佇列</div>
                    </div>
                    <div class="ts bottom attached segment">
                        <!-- 清理資料庫 -->
                        <div class="ts header">清理資料庫</div>
                        <!-- 進度列 -->
                        <div class="ts small active primary progress">
                            <div class="bar" style="width: 30%">
                                <div class="text">30%</div>
                            </div>
                        </div>
                        <!-- / 進度列 -->
                        <!-- / 清理資料庫 -->

                        <!-- 清理快取 -->
                        <div class="ts header">清理快取</div>
                        <!-- 進度列 -->
                        <div class="ts small preparing progress">
                            <div class="bar" style="width: 30%"></div>
                        </div>
                        <!-- / 進度列 -->
                        <!-- 清理快取 -->

                        <!-- 整理遠端倉庫 -->
                        <div class="ts header">整理遠端倉庫</div>
                        <!-- 進度列 -->
                        <div class="ts small indeterminate progress">
                            <div class="bar" style="width: 30%"></div>
                        </div>
                        <!-- / 進度列 -->
                        <!-- / 整理遠端倉庫 -->
                    </div>
                    <!-- / 系統佇列 -->

                    <!-- 最新上架產品 -->
                    <div class="ts top attached info segment">
                        <div class="ts large header">最新上架產品</div>
                    </div>
                    <div class="ts attached segment">
                        <div class="ts single line items">
                            <!-- 單個項目 -->
                            <div class="item">
                                <div class="ts tiny image">
                                    <img src="https://picsum.photos/seed/img1/200/150">
                                </div>
                                <div class="content">
                                    <a class="header">吻仔魚</a>
                                    <div class="description">
                                        一般可分為淡水魚魩仔魚與海水魚魩仔魚兩類。
                                        根據臺灣大學王友慈博士指出，魩仔魚是單一種魚類，
                                        是沙丁魚苗，若撈捕作業不正確有可能撈到數十至一百五十種類的魚苗。
                                    </div>
                                </div>
                            </div>
                            <!-- / 單個項目 -->

                            <!-- 單個項目 -->
                            <div class="item">
                                <div class="ts tiny image">
                                    <img src="https://picsum.photos/seed/img2/200/150">
                                </div>
                                <div class="content">
                                    <a class="header">芒果</a>
                                    <div class="description">
                                        是芒果屬的一種植物和果實，原產自北印度和馬來半島，
                                        在梵語中叫作āmra，音譯為「菴羅」，或叫作āmalaka，
                                        音譯為「菴摩勒」、「菴摩羅」、「阿摩落伽」。
                                    </div>
                                </div>
                            </div>
                            <!-- / 單個項目 -->
                        </div>
                    </div>
                    <button class="ts bottom attached fluid button">檢視更多</button>
                    <!-- / 最新上架產品 -->
                </div>
                <!-- / 右側雜項欄位 -->
            </div>
        </div>
        <!-- / 主要容器 -->

        <br>
    </div>
	<script src="/assets/js/clarity.js"></script>
	<!-- / 可擠壓式的推動容器 -->
</body>
</html>
<!-- Modified from https://examples.tocas-ui.com/pages/dashboard.html -->
