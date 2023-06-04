"use strict"

let colors = [
  '緋褪色（ひさめいろ）': '#e09285',
  '蜜柑茶（みかんちゃ）':'#cf6a38',
  '亜麻色（あまいろ）':'#E8DABE',
  '榛摺（はりずり）':'#79520B',
  '鶸色（ひわいろ）':'#D6D000',
  '滅紫（けしむらさき）':'#463042',
  '燻銀（いぶしぎん）':'#504539',
  '薄墨色（うすずみいろ）':'#7B8075',
  '紺滅（こんけし）':'#44617B',
  '韓紅（からくれない）':'#EA0032',
  '薄黒（うすぐろ）':'#231815',
  '紅葉色（もみじいろ）':'#a61017',
  '黄櫨染（こうろぜん）':'#d84c24',
  '溜色（ためいろ）':'#5F2428',
  '炎色（ほのおいろ）':'#c44303',
  '魚子黄（ぎょしこう）':'#F6EAB8',
  '都鼠（みやこねず）':'#A3858C',
  '紫黒色（しこくしょく）':'#14001A',
  '五倍子鉄漿色（ふしかねいろ）':'#9D896C',
  '至極色（しごくいろ）':'#2D0425',
  '赤墨（あかずみ）':'#4C2E30',
  '魚肚白（ぎょとはく）':'#E5EDF1',
  '浅杉染（あさすぎそめ）':'#BF7094',
  '濃紅葉（こいもみじ）':'#E2421F',
  '濃朽葉（こいくちば）':'#ff5234',
  '銀灰色（ぎんかいしょく）':'#A1A3A6',
  '緋銅色（ひどうしょく）':'#b01015',
  '金色（かないろ）':'#E6B422',
  '黄鼠（きねず）':'#A0873C',
  '遠州鼠（えんしゅうねず）':'#ca8269',
  '涅色（くりいろ）':'#433634',
  '石板色（せきばんいろ）':'#5D5D63',
  '焦香（こがれこう）':'#AE7C58',
  '紅碧（べにみどり）':'#8491C3',
  '支子色（くちなしいろ）':'#FFD768',
  '鼯鼠色（むささびいろ）':'#7c6c66',
  '惚色（ぼけいろ）':'#D6C3B7',
  '狐色（きつねいろ）':'#c38743',
  '赤白橡（あかしろつるばみ）':'#FED2AE',
  '雀茶（すずめちゃ）':'#aa4f37',
  '白群（びゃくぐん）':'#83CCD2',
  '枯草色（かれくさいろ）':'#E4DC8A',
  '香色（こういろ）':'#D1AC76',
  '紅紫（こうし）':'#b44c97',
  '深緑（ふかみどり）':'#2B4F32',
  '胡粉（ごふん）':'#FFFFFC',
  '海松色（みるいろ）':'#707050',
  '秘色（ひそく）':'#abced8',
  '漆黒（しっこく）':'#00000f',
  '銀朱（ぎんしゅ）':'#E24215',
  '常盤色（ときわいろ）':'#006428',
  '墨（すみ）':'#212222',
  '朱色（しゅいろ）':'#e94709',
  '浅縹（あさはなだ）':'#84B9CB',
  '天藍（てんらん）':'#87ceeb',
  '濡羽色（ぬればいろ）':'#000B00',
  '宍色（ししいろ）':'#efab93',
  '小豆色（あずきいろ）':'#905c54',
  '鳶色（とびいろ）':'#7c443c',
  '鉛色（なまりいろ）':'#7a7c7d',
  '枯色（かれいろ）':'#E7C694',
  '雪色（せっしょく）':'#e9eef3',
  '檳榔子黒（びんろうじぐろ）':'#00081A',
  '東雲色（しののめいろ）':'#F9AA8F',
  '鳩羽鼠（はとばねず）':'#9E8B8E',
  '丹色（にいろ）':'#E45E32',
  '藍鼠（あいねず）':'#6B818E',
  '飴色（あめいろ）':'#E5B36E',
  '紫紺（しこん）':'#460e44',
]

let namesForm = document.querySelectorAll('#bgcolor, #color')
for (const names of namesForm) {
  for (let i = 0; i < colors.length; i++) {
    let option = document.createElement('option')
    option.textContent = Object.keys(colors[i])
    names.appendChild(option)
  }
}
