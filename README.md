# user-interface-latency-todotocal
This is the source code of an experiment part of the research '**The impact of user interface latency on the purchase intention of digital products**'. 

The study aimed to research the relationship between *User Interface Latency (UIL)* and the *Purchase Intention (PI)* of a digital product. For the experiment, a prototype of a webapp was developed. The fictional webapp called **📅 ToDo To Cal** connects to a calendar and to-do app and allows participants to drag to-do's into free calendar slots.

1. First, participants are shown an introduction text.
2. Then, participants could use the webapp.
3. Finally, a questionnaire is conducted. 

> The text introduction and questionnaire are presented through *Tripetto*.

The code can be reviewed in this Github represitory.

### Disclaimer
The copyright of the Master thesis rests with the author. The author is responsible for its contents. Rotterdam School of Management, Erasmus University is only responsible for the educational coaching and cannot be held liable for the content.


## Demo 
A demo of the experiment is presented on this page:  [https://citt.me/thesis/demo/](https://citt.me/thesis/demo/) 
> **Note:** During the actual experiment, participants were not able to set their latency. This was done in advance. But since each unique device requires different latency levels, this can be adjusted in the demo version only.

## Generating latency
Latency is generated in the **B** condition of the experiment with the following code. `MAGIC_SLOWDOWN_VALUE` variable defines how much random variables are generated every millisecond and can be adjusted for different devices.

    <script type="text/javascript">
      const MAGIC_SLOWDOWN_VALUE = 10000;
      function addMore(){
        let newVal = ''
        for (let i = 0; i < MAGIC_SLOWDOWN_VALUE; i++) {
          newVal = newVal + Math.random()
        }
        document.getElementById('ta').value = newVal;
        setTimeout("addMore()",1);
      }
    </script>

## Sub-pages index
Pages are listed in order that they are being used during the experiment.

* `/todotocal/`
	* Start of the experiment, redirects to *Tripetto* for introduction text.
* `/randomstart/`
	* After introduction, participants randomly assigned to either group **A (low latency)** or **B (high latency)**.
* `/experiment/` & `/experimentb/`
	* First page of experiment: Connect to calendar & to-do app buttons.
* `/a/` & `/b/`
	* Second page of experiment: Drag & drop to-do's task.
* `/a-end/` & `/b-end/`
	* Randomly assign participants to 3 different price points and redirect to *Tripetto* questionnaire.

## Research conditions



The following six research conditions are used in the experiment. In `/randomstart/` participants are assigned to either **A** or **B** and later in `/a-end/` & `/b-end/` participants are assigned to either **1**, **2**, **3**.


|Condition                |Low Price				|    Medium Price         |High Price                         |
|----------------|-------------|-----------------|-----------------------------|
|Low UIL 				| Condition A1					|Condition A2            |Condition A3         |
|High UIL          |Condition B1					|Condition B2            |Condition B3            |
