package com.example.app_Quiz.model;

import jakarta.persistence.*;
import lombok.Getter;
import lombok.Setter;

import java.util.List;

@Entity
@Getter
@Setter
public class Subject {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private long id;

    @Column(nullable = false)
    private String name; // Name of Subject

    @OneToMany(mappedBy = "subject" , cascade = CascadeType.ALL)
    private List<LearningItem> learningItems;
}
