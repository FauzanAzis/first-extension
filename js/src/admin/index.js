import app from 'flarum/app';

app.initializers.add('fauzanazis/first-extension', () => {
  console.log('Hello, admin!');
});
