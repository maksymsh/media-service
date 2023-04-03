export const serialize = function (obj, prefix) {
    let str = [],
        p
    for (p in obj) {
        if (obj.hasOwnProperty(p)) {
            let k = prefix ? prefix + '[' + p + ']' : p,
                v = obj[p]
            if (v !== null && typeof v === 'object') {
                let ser = serialize(v, k)
                if (ser.length) {
                    str.push(ser)
                }
            } else {
                str.push(encodeURIComponent(k) + '=' + encodeURIComponent(v))
            }
        }
    }
    return str.join('&')
}
