# Oriperproject
Oriper 原創交流平台專案<br>
1)推薦花點時間閱讀IA Document:　https://drive.google.com/file/d/0B6-JSvmsopwsTGVqN3BnM1hkenc/view?usp=sharing<br>
2)原始Wireframe:https://imgur.com/a/FA2AO<br>
3)依洛改進的Wireframe：https://imgur.com/a/lFQep<br>
4)資料庫架構：http://imgur.com/fWFQp1j<br>
5)完成優先順序：https://oriper_public.hackpad.com/Oriper-Project-adapted-from--8ekWHQCm8ul<br>
6)已完成的Wireframe，大感謝阿旭：https://drive.google.com/folderview?id=0B6-JSvmsopwsfjFIdnFlYVZBelJ5b1otclpfcDdnOGgxZEtpMFFhQkVPRnBSN253QjVJQ3M&usp=sharing

前言：
希望各位愛護這裡，請勿引爆，我把我知道的都盡量放這裡了，請盡量幫忙修正

如果有任何問題或討論，可善用這裡，如果需要我回答而我消失了請直接敲我，但當然有更好想法請賜教

大感謝各位工程部的成員，如不想出名請把自己名字刪除：丫喵、熊寶、旭、Mewzi（彌子）、羽依、言逸文、Poyu、依洛、Lynn
特別感謝囧星人熱情支援資料
感謝球+瀴於前期給予意見

工程部各位朋友，如果我漏了整理某些資料請幫忙指出，不懂程式碼……囧

Achiba: achiba@live.com


目前確認是 MySQL database,建議Laravel 用

之前討論的內容：

2)"系列故事"應該 = 一堆"作品"的集合 ?(Poyu)

是的，又或者說是連載。例如你的故事叫「七龍殊」，你裡面有很多不斷更新的漫畫，有時有些設定、或者有些番外，這個都是在七龍珠的系列故事內。(Achiba)

3)一個"腳色" 可能屬於多個 "作品"、"企劃"、"系列" ?(Poyu)

可以的，比方說初音咪哭可以在本家的故事，也可以穿越至勇者、機械人、宮廷、校園故事……當然一般的情況來說，一個角色是屬於一個系列內（但可以在多個作品內存在，所謂作品就是故事，如果咪哭是主角，那麼作品內幾乎都有咪哭一直出現）(Achiba)

4)承上題 如果會屬於多個，那腳色之間的關係是否在不同作品間會不一樣?(Poyu)

有可能。基本上角色只會在一個故事內出現，但如果知名到像是初音咪哭一般在不同故事穿越，那麼就有可能需要在資料庫上進行處理。
系統的處理上可以做到這一點嗎？（既是朋友也是敵人）
如果不能夠，那麼也可以鼓勵作者一個故事一個角色來投稿（EG.初音(勇者版)、初音(校園版)）ETC
企劃活動可以參考：http://doujin-planning.weebly.com/3691434892200132022521123.html
簡單來說就是定一個題目，讓作者根據這個世界和設定創作。

5)Tag要有id嗎？(Mewzi)

是想說Tag的table只有tag_id 跟 Tag_name兩個，作品那邊的關聯就用id
不過想想tag一多作品的table說不定會很可怕...
tag <tag-id> <tag-name>
tag_relation <tag_id> <work_id>
應該是這個意思?
的確正規一些 而且還有一個好處是可能可以對每個tag另外存一些資訊
至於tag一多.... 那應該也是要等到系統漲到一定規模才會有問題吧~就先這樣吧XD(Poyu)

6)角色頁面長得跟其他作品頁面不同，id跟work_id要合併成character_id之類如何？(Mewzi)

work那張表我想拆掉 就直接各自對應每種類型的作品
這部分有辦法讓get的網址是一樣就好了(參考P網)
然後我想work_id跟type拆出來給大頁面抓資料用，這樣會讓作品table的負擔比較小...一點?(Mewzi)
本來想要拆出一張work table的原因其實就是方便對應其他表/搜尋
所以還是維持原案吧...(?(Poyu)

7)資料庫要存圖片的檔名？或是圖檔名直接改成id，多圖上傳起碼還要多開一個圖片數量的欄位(Mewzi)

P網是id_p+編號這樣，覺得可以省掉中文檔名要轉編碼的問題w(Mewzi)

8) Star跟score有何差別？兩者無關的話star少一個存投票值的欄位？(Mewzi)

star 是關注 score是評分 歡迎提供命名XD(Poyu)

9) 系列故事缺了標題、tag、簡介、規範欄位（詳情參照wireframe系列故事）(Mewzi)

tag 都是透過work來和tag做關聯(Poyu)

10) 關注後的新作品或留言推播會放在哪張表？(Mewzi)

不如拆一張表吧 不然就每次進來就怒全部的table都撈一遍(Poyu)

11) 我記得角色有類似FB tag人的那種機制？ cid跟角色名稱需要拆張表嗎?(Mewzi)

tag人的機制 不如再想想 author那張表吧 (Poyu)

12)企劃主有剔除場內角色權利的設定嗎？

當然有，不然亂入很頭大啊～(Achiba)

