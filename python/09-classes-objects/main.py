# Classes and objects: a class, objects in a list, inheritance.
# Lessons 28-29.


class Student:
    """Uczeń z imieniem i listą ocen."""

    # Runs by itself when an object is created.
    def __init__(self, name, grades):
        # self.name lives in the object, name disappears after __init__.
        self.name = name
        self.grades = grades

    def average(self):
        if len(self.grades) == 0:
            return 0
        return round(sum(self.grades) / len(self.grades), 2)

    def add_grade(self, grade):
        self.grades.append(grade)

    # What print() shows for the object; must return text.
    def __str__(self):
        return self.name + " (średnia " + str(self.average()) + ")"


# Each object keeps its own data.
ala = Student("Ala", [5, 4, 3])
bartek = Student("Bartek", [3, 3, 4])

# No brackets: attribute; brackets: method call.
print("Imię pierwszego ucznia:", ala.name)
print("Jego oceny:", ala.grades)
print("Średnia Ali:", ala.average())
print("Średnia Bartka:", bartek.average())

ala.add_grade(6)
print("Oceny Ali po dopisaniu szóstki:", ala.grades)
print("Nowa średnia Ali:", ala.average())

print(ala)

students = [ala, bartek, Student("Ola", [6, 5, 5])]

for student in students:
    print("Uczeń:", student, "liczba ocen:", len(student.grades))

best = students[0]
for student in students:
    if student.average() > best.average():
        best = student
print("Najlepsza średnia:", best)


# Athlete inherits everything from Student.
class Athlete(Student):

    def __init__(self, name, grades, sport):
        # Runs Student.__init__ for name and grades.
        super().__init__(name, grades)
        self.sport = sport

    # Replaces Student.__str__; average() still comes from Student.
    def __str__(self):
        return self.name + " trenuje " + self.sport + " (średnia " + str(self.average()) + ")"


kuba = Athlete("Kuba", [4, 5, 5], "siatkówkę")
print(kuba)
print("Średnia Kuby liczona metodą z klasy Student:", kuba.average())

# TU ZMIEŃ: dopisz własną metodę w klasie Student, na przykład highest_grade(), i wywołaj ją w print()
