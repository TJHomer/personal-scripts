##This is a Choose your Own Avendture text based game.
##Choices are determined by typing (1) or (2).
##Written January 2019

import time
import textwrap
import click


def choice_check(choice):
        if choice not in ["1", "2"]:
                print ("Please choose 1 or 2")
                another_choice = raw_input("Try again:  ")
                return choice_check(another_choice)
        else:
                return str(choice)


def start():
        click.clear()
        print textwrap.dedent("""\
                Type your story beginning here.
                """)
        choice=raw_input("Choose (1) Continue  or (2) Exit  ")
        if choice_check(choice)=="1":
                keep_going()
        else:
                no_i_hate_this()
        return


def keep_going():
        click.clear()
	#continue ad nauseum with the story and choices


def no_i_hate_this():
        # From start()
        click.clear()
        print textwrap.dedent("""
		Well fine then
                """)
        exit()


start()
