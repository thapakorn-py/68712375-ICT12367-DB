const apiBaseUrl = process.env.VUE_APP_API_BASE_URL ||
  'http://localhost/68712375-ICT12367-DB-main/php.api';

export const apiUrl = (endpoint) => `${apiBaseUrl}/${endpoint}`;