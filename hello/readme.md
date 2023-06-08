# This is a Online Textboard that works with Web Speech API
これは、音声認識・音声合成を使った掲示板です。

*ウェブ音声 API (Web Speech API)* で **音声をテキスト・テキストを音声** に変換し投稿を作成
投稿を時間帯・二十四節気ごとに記録し、掲示板に時間帯・二十四節気ごとの投稿を表示します。

***

* [Speech Recognition](js/recognition.html)
* [Speech Synthesis](js/synthesis.html)

Create Posts with Speech to Text using Speech Recognition
and Read Posts with Text to Speech using Speech Synthesis

---

## 1日を 4つ の *時間帯* に 区分
投稿を **二十四節気[^1]** ごとのディレクトリ内にある *時間帯* ごとの CSVファイル に記録

| Timeframe  |   From   |    To    |
|:-----------|:--------:|:--------:|
| ***おやすみ***   | 00:00:00 | 05:59:59 |
| ***おはよう***   | 06:00:00 | 11:59:59 |
| ***こんにちは*** | 12:00:00 | 17:59:59 |
| ***こんばんは*** | 18:00:00 | 23:59:59 |

* [submit.php](submit.php)
Add Posts to a CSV files for each *Timeframe* in the directories of **24 Sekki**

***

### On This Textboard, Posts are created and read every 24 sekki to representing the changing seasons.
[24 Sekki](all/index.php) divided each of the Four Seasons into 6 according to the ecliptic longitude of the Sun.

[^1]:二十四節気は、四季「春」「夏」「秋」「冬」それぞれを太陽の動きをもとに6つに分け、季節をあらわす名前をつけたもの。
