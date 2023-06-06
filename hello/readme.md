# This is a Message Board that works with Web Speech API
これは、音声認識・音声合成を使った掲示板です。

*ウェブ音声 API (Web Speech API)* で **音声をテキスト・テキストを音声** に変換
投稿を 時間帯・二十四節気 ごとに記録し、ページ内容を生成します。

## [Speech Recognition](js/recognition.html)
## [Speech Synthesis](js/synthesis.html)

Create Posts with Speech to Text using Speech Recognition
and Read Posts with Text to Speech using Speech Synthesis

---

### 1日を 4つ の *時間帯* に 区分
**二十四節気[^1]** ごとのディレクトリ内の *時間帯* ごとの CSVファイル に投稿を記録します。

| Timeframe  |   From   |    To    |
|:-----------|:--------:|:--------:|
| ***おやすみ***     | 00:00:00 | 05:59:59 |
| ***おはよう***   | 06:00:00 | 11:59:59 |
| ***こんにちは*** | 12:00:00 | 17:59:59 |
| ***こんばんは***   | 18:00:00 | 23:59:59 |

[^1]:二十四節気は、四季「春」「夏」「秋」「冬」それぞれを太陽の動きをもとに6つに分け、季節をあらわす名前をつけたもの。
中国の中原の気候をもとに名付けられているため、日本で体感する気候とは季節感が合わない名称や時期があります。また、その年によって節の始まりの日が1日程度前後することがあります。

***
