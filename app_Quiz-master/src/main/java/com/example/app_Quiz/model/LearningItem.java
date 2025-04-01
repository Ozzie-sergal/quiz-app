package com.example.app_Quiz.model;


import jakarta.persistence.*;
import lombok.Getter;
import lombok.Setter;

@Entity
@Getter
@Setter
public class LearningItem {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @Column(nullable = false)
    private String question; // Treść pytania

    @Column(nullable = false)
    private String answerA; // Odpowiedz A

    @Column(nullable = false)
    private String answerB; // Odpowiedz B

    @Column(nullable = false)
    private String answerC; // Odpowiedz C

    @Column(nullable = false)
    private String correctAnswer; // Poprawna odpowiedź (A, B lub C)

    @ManyToOne
    @JoinColumn(name = "subject_id")
    private Subject subject;
}
