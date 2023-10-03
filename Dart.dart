class BlogList {
  final int? id;
  final String? title;
  final String? slug;
  final int? view;
  final String? image;
  final String? date;
  final String? creator;

  BlogList({this.id, this.title, this.slug, this.view, this.image, this.date, this.creator});

  factory BlogList.fromJson(Map<String, dynamic> parsedJson) {
    return BlogList(
      id: parsedJson['id'] as int,
      title: parsedJson['title'],
      view: parsedJson['view'] as int,
      image: parsedJson['picture'],
      date: parsedJson['date'],
      creator: parsedJson['username'],
    );
  }
}
