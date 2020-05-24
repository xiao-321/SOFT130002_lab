# Lab8设计文档
李晓伟 19302010006

#1
next_pic（）函数中先判断wrap中left的数值 若不是-3600px则通过parseInt将字符串转化为int再-600px切换到下一张
index++让右下角的序号变成下一个；如果是第五张则重新让index=0返回第一张
prev_pic ()函数同理
currentDot();先将所有点都变成未被激活的 再将index的点变成active来变换右下角点的颜色

#2
运用setInterval每2000ms运行next_pic()函数即可
onmouseenter onmouseleave来监听鼠标是否悬停在图片上
悬停在图片上清空 离开时运行autoPlay ()函数

#3
通过click来改变展示图片 parseInt(wrap.style.left) +  click * 600
而在第一张图片和最后一张图片的时候较特殊 单独用id进行判定
最后用currentDot()改变右下角的active button

#4
 先用$("td").click(function()设置td的点击事件
td.html("<input type = 'text' class = 'currentInput' >")将td变成一个input进行输入
input.focus()聚焦
再用input.click(function() {return false;})将input的点击事件设置成false
input.blur失去焦点时将input变回新文本

