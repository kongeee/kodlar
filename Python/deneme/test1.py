# -*- coding: utf-8 -*-
"""
Created on Fri Nov 27 01:19:42 2020

@author: Ekici
"""

import sys
import requests
from bs4 import BeautifulSoup
import sqlite3
from PyQt5 import QtWidgets
import random



class UI(QtWidgets.QWidget):
    def __init__(self):
        super().__init__()
        self.DBconnection()
        self.init_ui()

    def DBconnection(self):  # Creates DB
        self.conn = sqlite3.connect("movies.db")
        self.cursor = self.conn.cursor()
        self.cursor.execute("CREATE TABLE IF NOT EXISTS BestMovies(Number INT, Name TEXT,Score FLOAT,Year INT)")
        self.conn.commit()

    def init_ui(self):  # Creates the Window with elements
        self.setWindowTitle("Random Movie Suggestion APP 1.0")
        self.setGeometry(100, 100, 400, 200)

        self.message = QtWidgets.QLabel("Welcome")
        self.show_movie = QtWidgets.QLineEdit()
        self.update_button = QtWidgets.QPushButton("Update")
        self.suggestion_button = QtWidgets.QPushButton("Suggest random movie")

        self.message.setStyleSheet("color:#0000FF;"
                                   "font-size:14px;")  # message label style sheet

        self.show_movie.setStyleSheet("color:red;"
                                      "font-size:18px;"
                                      "width:650px;")  # movie line style sheet

        self.update_button.setStyleSheet("font-size:15px;")
        self.suggestion_button.setStyleSheet("font-size:15px;")

        v_box = QtWidgets.QVBoxLayout()  # Vertical Layout

        v_box.addWidget(self.message)  # Add the elements
        v_box.addWidget(self.update_button)
        v_box.addWidget(self.suggestion_button)
        v_box.addStretch()  # space

        v_box.addWidget(self.show_movie)
        v_box.addStretch()

        h_box = QtWidgets.QHBoxLayout()  # Horizontal Layout
        h_box.addStretch()
        h_box.addLayout(v_box)
        h_box.addStretch()

        self.update_button.clicked.connect(self.DBtakingData)
        self.suggestion_button.clicked.connect(self.aMovie)

        self.setLayout(h_box)
        self.show()

    def DBtakingData(self):  # Takes data from the web site
        self.message.setText("Collecting data...")

        self.cursor.execute("DELETE FROM BestMovies")  # all data in DB are deleted
        self.conn.commit()  # save it

        url = "https://www.imdb.com/chart/top"
        try:
            response = requests.get(url)  # connect the website
        except:
            self.message.setText("An error occured (Check internet connection)")
            return

        self.message.setText("Data was collected succesfully")
        content = response.content  # get website's content

        parser = BeautifulSoup(content, "html.parser")

        names = parser.find_all("td",
                                {"class": "titleColumn"})  # find the all td elements which class name is titleColumn
        # this td elements keep names of movies
        scores = parser.find_all("td", {"class": "ratingColumn imdbRating"})  # and these keep scores of movies
        number = 1
        for name1, score in zip(names, scores):
            name1 = name1.text.replace("\n", "").strip()
            name1 = name1[5:].split("(")

            name = str(name1[0].strip())
            year = int(name1[1].replace(")", ""))

            score = float(score.text.replace("\n", "").strip())

            self.cursor.execute("INSERT INTO BestMovies VALUES(?,?,?,?)", (number, name, score, year))
            self.conn.commit()
            number += 1

    def aMovie(self):
        num = random.randint(1, 250)
        self.cursor.execute("SELECT Name FROM BestMovies WHERE Number=?", (num,))
        movie = self.cursor.fetchall()
        self.message.setText("")
        try:
            self.show_movie.setText(movie[0][0])
        except:
            self.message.setText("Please click Update button first")


app = QtWidgets.QApplication(sys.argv)
ui = UI()
sys.exit(app.exec_())