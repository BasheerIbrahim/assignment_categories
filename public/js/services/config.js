let baseURL = '';
if ('production' == false){
    baseURL = '';

}else {
    baseURL = 'http://localhost:8080';
}
export const apiHost = baseURL