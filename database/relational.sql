SELECT topic.id,title,name,created FROM topic LEFT JOIN user ON topic.author=user.id;
