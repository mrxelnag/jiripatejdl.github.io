function handleCopyTextFromArea() {
    const area = document.querySelector('#clipboard-area')
    area.select();
    document.execCommand('copy')
  }