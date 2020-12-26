function printPattern(num) {
  for (let i = 1; i <= num; i++) {
    str = "";
    width = num *2
        for (let j = 1; j < width; j++) {
          if ((j > i && j < width - i )) {
            str += ' * '
          }
          else {
            str += ' ';
          }
      }
    console.log(str);
  }
}

printPattern(10)