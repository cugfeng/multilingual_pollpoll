<?php

return [

    /*
    |--------------------------------------------------------------------------
    | pollpoll.net related Language Lines
    |--------------------------------------------------------------------------
    |
    |
    */
    'create'    => '新增问卷',
    'mgt'       => '问卷管理',
    'duplicate.votes'   => '此份问卷您已经投过票了!',

    'qnr.status.draft'		=> '草稿编辑中',
    'qnr.status.complete'	=> '完成',
    'qnr.savedraft.success' => '储存草稿完成，可以从后台问卷管理功能再次开启编辑喔..',
    'main.remlink'          => '現在可以記下您的問卷鏈結開始使用囉!',
    'main.qnrqr'            => '問卷網址QR Code:',
    'main.qnrembed'         => '或內嵌問卷到您的網站?',
    'main.thanks'           => '謝謝您，已經完成回答問卷囉!',
    'main.createqnr'        => '自己創建一個問卷?',
    'main.result'           => '看統計結果',
    'main.resultqr'         => '問卷結果統計網址QR Code:',
    'main.resultiframe'     => '或是複製以下 iframe 將統計結果嵌入到您的網站 ?',
    'main.h1'               => 'Poll Poll  - 即 時 民 調、投 票 ',
    'main.insert'           => '插入圖片或影片必須將檔案儲存於屬於您的系統帳號下，因此需要先登入系統。',
    'main.use'              => '使用圖片或影片 ?',
    'main.writeq'           => '在這裡寫下我想問的問題...',
    'main.opt'              => '填入選項',
    'main.dupcheck'         => '不勾選: 同一張問卷，使用者可以無限制的重複投票。 一般限制 :  適合一般組織、公司、學校內部，重要性為普通程度的問卷。 嚴格限制 : 適合重要性較高的問卷，以使用者連線的Public IP做為限制條件，一般組織、公司內部若使用intranet架構,對外連線部份使用者有機率會被視為單一Public IP.',
    'main.dupcheck1'        => '重複投票限制檢查 ?',
    'main.dupcheckgeneral'  => '一般限制',
    'main.dupcheckstrict'   => '嚴格限制',
    'main.sign1'            => '填入你要求投票者需要留下的資訊。 例如: 姓名、識別工號、連絡電話或是電子郵件，這些資訊只有你可以從後台管理功能看見，其它投票者不會看見這些資訊!',
    'main.sign2'            => '記名投票 ?',
    'main.sign3'            => 'ex: 姓名、工號、聯絡電話、電子郵件',
    'main.multi1'           => '允許投票者同時選取多個選項!',
    'main.multi2'           => '複選題 ?',
    'main.multi3'           => '複選題',
    'main.multi4'           => '允許投票者同時選取多個選項，填入複選題的題號，並用逗號 (，) 分隔. 例如第1 3 5題為複選題，則填入 1,3,5',
    'main.captcha1'         => '重要性高的或是較長統計時間的問卷，可以開啟人機驗證(Captcha)，可以防止機器人或是惡意軟體參與投票',
    'main.endtime'          => '設定投票截止時間 ?',
    'main.private1'         => '若此份問卷是使用在公司內部，或是獨立組織內的問卷調查，如果問卷的內容不適合公開或是不適合讓非組織內的成員投票，請勾選。',
    'main.private2'         => '將問卷設定為不公開 ?',
    'main.info1'            => '如果您要求投票者提供額外的性別、年齡層等資訊，那麼投票結果就會顯示這些資訊的統計分析。',
    'main.info2'            => '要求投票人提供更多資訊 ?',
    'main.infogender'       => '性別',
    'main.infoage'          => '年齡層',
    'main.qnrtitle'         => '修改問卷標題?',
    'main.qnrftitle'        => '填入問卷標題',
    'main.finish'           => '完成了...',
    'main.alphabet'         => '輸入字母',
    'main.neweqnr'          => '建立問卷',
    'main.saveqnr'          => '儲存問卷',
    'main.savedraft'        => '暫存草稿?',

        //multigen
    'multiqnr'              => '多題型問卷',
    'multifrom'             => '從這裡開始:',
    'multiselnum'           => '選擇問卷包含的題數:',

        //multimain
    'multiset'              => '完成其它設定',
        
        //qnrmain
    'qnrendtime'            => '已超過回答問卷截止時間!',
    'qnrtotal'              => '，一共有',
    'qnrquestions'          => '題!',
    'qnrfill'               => '開始填問卷，一共有',
    'qnrenbed'              => '或內嵌問卷到您的網站?',
    'qnrq'                  => '# 問題',
    'qnrfill1'              => '您必須填入您的',
    'qnrfill2'              => '才能送出問卷!',
    'qnrsel'                => '選擇您的',
    'qnrfemale'             => '女性',
    'qnrmale'               => '男性',
    'qnrother'              => '其它',
    'qnrtext'               => '輸入圖片內的文字',
    'qnren'                 => '( 英文字母大小寫不同 ):',
    'qnrsend'               => '完成送出!',
        //resultmain_part1
    're1'                   => '這份問卷目前已經有',
    're2'                   => '次投票.',
    'statgender'            => '性別統計',
    'statage'               => '年齡層統計',
    'statbarchart'          => '票數長條圖統計',
    'statpiechart'          => '百分比得票率',
    'stat3s'                => '(每3秒自動更新)',
        //backend user main
    'qnrmgt'                => '問 卷 管 理',
    'acctmgt'               => '帳號管理',
    'myqnr'                 => '我的問卷',
    'resetre'               => '重置投票結果',
    'resetre?'              => '確定要清空投票結果?',
    'reset'                 => '重置',
    'editreset'             => '啟動再次編輯將會重置投票結果',
    'edit'                  => '編輯',
    'delqnr'                => '這會刪除 問卷 ID: ',
    'delqnr?'               => '，確定要刪除?',
    'del'                   => '刪除',
    'emptyqnr'              => '您目前沒有任何問卷!',
    //backend user resultmain
    'otherinfo'             => '投票人資訊:',
    //controller
    'con_draft_login'       => '若要暫存草稿，那麼您會需要問卷管理功能，這需要您先登入帳號。',
    'con_sign_login'        => '若您勾選了記名投票，那麼您會需要問卷管理功能，這需要您先登入帳號。',
    'con_private_login'     => '若您勾選了將問卷設定為不公開，那麼您會需要問卷管理功能，這需要您先登入帳號。',
    'con_age0'              =>  ' 0-10歲',
    'con_age1'              =>  '11-20歲',
    'con_age2'              =>  '21-30歲',
    'con_age3'              =>  '31-40歲',
    'con_age4'              =>  '41-50歲',
    'con_age5'              =>  '51-60歲',
    'con_age6'              =>  '61-70歲',
    'con_age7'              =>  '71-80歲',
    'con_age8'              =>  '81-90歲',
    'con_age9'              =>  '91-100歲',
    'con_q'                 =>  '問題 ',
    'con_vote'              =>  ' 票',
    'con_opt'               =>  '選項',
    //meta
    'meta_topic'            => 'Poll Poll - 即時民調、投票',
    'meta.index.desc'       => 'pollpoll.net提供極簡的問卷設計,能快速建立問卷並透過QR Code或Iframe傳遞問卷網址,即時顯示統計投票結果,適合用在需要和聽眾或粉絲即時互動的情境下使用。',
    'meta.index.kw'         => '即時民調、投票系統,多題型問卷,觀眾互動的投票系統。',
    'meta.mqidx.title'      => '多題型問卷選擇題數',
    'meta.mqidx.desc'       => '建立多題型問卷可以選擇1~20題。',
    'meta.mqidx.kw'         => '多題型,問卷,民調,1~20題。',
    'meta.multiq.title'     => '多題型問卷編輯主頁',
    'meta.multiq.desc'      => '建立多題型問卷內容',
    'meta.multiq.kw'        => '多題型,問卷,民調',
    'meta.qnrtitle'         => '問卷標題:',
    'meta.qnr'              => '問卷',
    'meta.qnrabout'         => '這份問卷是關於',
    'meta.result'           => '結果統計頁面',
    'meta.backend.main'     => '的後台管理問卷主頁',
    'meta.backend.this'     => '這是',
    'meta.backend.func'     => '的後台管理問卷主頁,可以編輯,重置答案統計或刪除問卷。',
    'meta.backend.func1'    => '編輯問卷,重置問卷,刪除問卷',
    'meta.backend.edit'     => '的後台編輯頁面',
    'meta.backend.re'       => '的後台結果統計頁面',
    'meta.backend.mgt'      => '後台管理',
];
