// Toasts
const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
  toastTrigger.addEventListener('click', () => {
    toastBootstrap.show()
  })
}

// Toast top right
const topRight = document.getElementById('topRightBtn')
const topRightToast = document.getElementById('topRightToast')

if (topRight) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(topRightToast)
  topRight.addEventListener('click', () => {
    toastBootstrap.show()
  })
}

// Toast top left
const topLeft = document.getElementById('topLeftBtn')
const topLeftToast = document.getElementById('topLeftToast')

if (topLeft) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(topLeftToast)
  topLeft.addEventListener('click', () => {
    toastBootstrap.show()
  })
}

// Toast bottom right
const bottomLeft = document.getElementById('bottomLeftBtn')
const bottomLeftToast = document.getElementById('bottomLeftToast')

if (bottomLeft) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(bottomLeftToast)
  bottomLeft.addEventListener('click', () => {
    toastBootstrap.show()
  })
}

// Toast bottom right
const bottomRight = document.getElementById('bottomRightBtn')
const bottomRightToast = document.getElementById('bottomRightToast')

if (bottomRight) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(bottomRightToast)
  bottomRight.addEventListener('click', () => {
    toastBootstrap.show()
  })
}

// Toast Danger
const toastDanger = document.getElementById('toastDangerBtn')
const toastDangerToast = document.getElementById('toastDanger')

if (toastDanger) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastDangerToast)
  toastDanger.addEventListener('click', () => {
    toastBootstrap.show()
  })
}

// Toast Info
const toastInfo = document.getElementById('toastInfoBtn')
const toastInfoToast = document.getElementById('toastInfo')

if (toastInfo) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastInfoToast)
  toastInfo.addEventListener('click', () => {
    toastBootstrap.show()
  })
}

// Toast Success
const toastSuccess = document.getElementById('toastSuccessBtn')
const toastSuccessToast = document.getElementById('toastSuccess')

if (toastSuccess) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastSuccessToast)
  toastSuccess.addEventListener('click', () => {
    toastBootstrap.show()
  })
}

// Toast Warning
const toastWarning = document.getElementById('toastWarningBtn')
const toastWarningToast = document.getElementById('toastWarning')

if (toastWarning) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastWarningToast)
  toastWarning.addEventListener('click', () => {
    toastBootstrap.show()
  })
}