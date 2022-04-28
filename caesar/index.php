<!DOCTYPE html>
<html data-scheme="dark">
    <head>
        <meta charset="UTF-8" />
		<title>聊天室 - Tocas UI 範例</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocas-ui/4.0.2/tocas.min.css">
    </head>
    <body>
        <div class="ts-app-layout is-horizontal is-full">
            <div class="cell" style="width: 330px">
                <div class="ts-content">
                    <div class="ts-row is-middle-aligned">
                        <div class="column">
                            <div class="ts-avatar is-circular">
                                <img src="/img/user3.png" />
                            </div>
                        </div>
                        <div class="column is-fluid">
                            <div class="ts-header">聊天室</div>
                        </div>
                        <div class="column">
                            <div class="ts-wrap is-compact">
                                <button class="ts-button is-circular is-small is-icon is-secondary">
                                    <span class="ts-icon is-ellipsis-icon"></span>
                                </button>
                                <button class="ts-button is-circular is-small is-icon is-secondary">
                                    <span class="ts-icon is-user-group-icon"></span>
                                </button>
                                <button class="ts-button is-circular is-small is-icon is-secondary">
                                    <span class="ts-icon is-pen-to-square-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ts-space"></div>
                    <div class="ts-input is-solid is-fluid is-start-icon">
                        <span class="ts-icon is-magnifying-glass-icon"></span>
                        <input type="text" placeholder="搜尋聊天使用者…" />
                    </div>
                    <div class="ts-space"></div>
                    <div class="ts-content is-interactive is-dense">
                        <div class="ts-row is-middle-aligned">
                            <div class="column">
                                <div class="ts-avatar is-circular is-large">
                                    <img src="/img/user.png" />
                                </div>
                            </div>
                            <div class="column">
                                <div class="ts-text is-bold">東雲鈴音</div>
                                <div class="ts-text is-description">我不忍也不敢告訴他們，今天…</div>
                            </div>
                        </div>
                    </div>
                    <div class="ts-content is-interactive is-dense">
                        <div class="ts-row is-middle-aligned">
                            <div class="column">
                                <div class="ts-avatar is-circular is-large">
                                    <img src="/img/user2.png" />
                                </div>
                            </div>
                            <div class="column">
                                <div class="ts-text is-bold">山崎颯太</div>
                                <div class="ts-text is-description">現在是凌晨 2:55 分…</div>
                            </div>
                        </div>
                    </div>
                    <div class="ts-content is-interactive is-dense">
                        <div class="ts-row is-middle-aligned">
                            <div class="column">
                                <div class="ts-avatar is-circular is-large">
                                    <img src="/img/user3.png" />
                                </div>
                            </div>
                            <div class="column">
                                <div class="ts-text is-bold">Yami Odymel</div>
                                <div class="ts-text is-description">早安我的朋友，好久沒…</div>
                            </div>
                        </div>
                    </div>
                    <div class="ts-content is-interactive is-dense">
                        <div class="ts-row is-middle-aligned">
                            <div class="column">
                                <div class="ts-avatar is-circular is-large">
                                    <img src="/img/user.png" />
                                </div>
                            </div>
                            <div class="column">
                                <div class="ts-text is-bold">佐藤理人</div>
                                <div class="ts-text is-description">大家也要生存，也要生…</div>
                            </div>
                        </div>
                    </div>
                    <div class="ts-content is-interactive is-dense">
                        <div class="ts-row is-middle-aligned">
                            <div class="column">
                                <div class="ts-avatar is-circular is-large">
                                    <img src="/img/user2.png" />
                                </div>
                            </div>
                            <div class="column">
                                <div class="ts-text is-bold">喜羽正明</div>
                                <div class="ts-text is-description">幾年後你卻反了過來，你說…</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cell is-fluid is-vertical">
                <div class="cell">
                    <div class="ts-content">
                        <div class="ts-row is-middle-aligned">
                            <div class="column">
                                <div class="ts-avatar is-circular">
                                    <img src="/img/user.png" />
                                </div>
                            </div>
                            <div class="column is-fluid">
                                <div class="ts-text is-bold">星乃菖蒲</div>
                            </div>
                            <div class="column">
                                <button class="ts-button is-circular is-icon is-ghost">
                                    <span class="ts-icon is-phone-icon"></span>
                                </button>
                                <button class="ts-button is-circular is-icon is-ghost">
                                    <span class="ts-icon is-video-icon"></span>
                                </button>
                                <button class="ts-button is-circular is-icon is-ghost">
                                    <span class="ts-icon is-ellipsis-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell is-fluid is-scrollable">
                    <div class="ts-content">
                        <div class="ts-conversation">
                            <div class="avatar">
                                <img src="/img/user.png" />
                            </div>
                            <div class="content">
                                <div class="bubble">
                                    <div class="text">
                                        欸欸 我告訴你一個秘密<br />
                                        不要跟別人說哦
                                    </div>
                                    <div class="meta">
                                        <div class="item">下午 9:48</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ts-space"></div>
                        <div class="ts-conversation">
                            <div class="avatar">
                                <img src="/img/user.png" />
                            </div>
                            <div class="content">
                                <div class="bubble">
                                    <div class="text">
                                        保險起見 我加密一下好了
                                    </div>
                                    <div class="meta">
                                        <div class="item">下午 9:49</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ts-space"></div>
                        <div class="ts-conversation is-self is-sent">
                            <div class="avatar">
                                <img src="/img/user.png" />
                            </div>
                            <div class="content">
                                <div class="bubble">
                                    <div class="text">
                                        好 我等你
                                    </div>
                                    <div class="meta">
                                        <div class="item">下午 9:49</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ts-space"></div>
                        <div class="ts-conversation">
                            <div class="avatar">
                                <img src="/img/user.png" />
                            </div>
                            <div class="content">
                                <div class="bubble">
                                    <div class="text">
                                        QWLR{Jzf_qzfyo_zfc_dpncpe!}
                                    </div>
                                    <div class="meta">
                                        <div class="item">下午 9:52</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ts-space"></div>
                        <div class="ts-conversation is-self is-sent">
                            <div class="avatar">
                                <img src="/img/user.png" />
                            </div>
                            <div class="content">
                                <div class="bubble">
                                    <div class="text">
                                        這太簡單了啦 很容易被猜出來欸 😱
                                    </div>
                                    <div class="meta">
                                        <div class="item">下午 9:53</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ts-space"></div>
                        <div class="ts-conversation">
                            <div class="avatar">
                                <img src="/img/user.png" />
                            </div>
                            <div class="content">
                                <div class="bubble">
                                    <div class="text">
										那我們換一種好了
                                    </div>
                                    <div class="meta">
                                        <div class="item">下午 9:53</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ts-space"></div>
                        <div class="ts-conversation">
                            <div class="avatar">
                                <img src="/img/user.png" />
                            </div>
                            <div class="content">
                                <div class="bubble">
                                    <div class="text">
										🥊🍑🍁👑🔚🔞😴💶🙅🎙🔳🍡🥊🕰🏇🍉📽🔭🏻💶😍🚚🏿🍕🥊🆓👋🍪🗺🔫🌵🦝🗡<br>
										🥞🏿🕥🥮🥾🌈📜🏧🎌🌗🤨👪🛤🥂🔬👍🚰🎖🌲👶🦆☕☕
                                    </div>
                                    <div class="meta">
                                        <div class="item">下午 9:53</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell">
                    <div class="ts-content is-dense">
                        <div class="ts-row is-compact is-middle-aligned">
                            <div class="column">
                                <button class="ts-button is-circular is-icon is-ghost">
                                    <span class="ts-icon is-face-smile-icon"></span>
                                </button>
                                <button class="ts-button is-circular is-icon is-ghost">
                                    <span class="ts-icon is-image-icon"></span>
                                </button>
                                <button class="ts-button is-circular is-icon is-ghost">
                                    <span class="ts-icon is-note-sticky-icon"></span>
                                </button>
                            </div>
                            <div class="column is-fluid">
                                <div class="ts-input is-solid is-fluid">
                                    <input type="text" placeholder="訊息…" />
                                </div>
                            </div>
                            <div class="column">
                                <button class="ts-button is-circular is-icon is-ghost">
                                    <span class="ts-icon is-paper-plane-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
