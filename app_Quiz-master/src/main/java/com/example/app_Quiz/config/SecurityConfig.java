package com.example.app_Quiz.config;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.security.web.SecurityFilterChain;

@Configuration
@EnableWebSecurity
public class SecurityConfig {

    @Bean
    public SecurityFilterChain securityFilterChain(HttpSecurity http) throws Exception {
        http
                .authorizeHttpRequests((requests) -> requests
                        .anyRequest().authenticated()
                        .requestMatchers("/register", "/login").permitAll() // Zezwól na dostęp do rejestracji i logowania bez autoryzacji
                        .requestMatchers("/admin/**").hasRole("ADMIN") // Tylko admin ma dostęp do panelu admina
                        .requestMatchers("/teacher/**").hasRole("TEACHER") // Tylko nauczyciel ma dostęp do panelu nauczyciela
                        .requestMatchers("/student/**").hasRole("STUDENT") // Tylko uczeń ma dostęp do panelu ucznia
                        .anyRequest().authenticated() // Wszystkie inne żądania wymagają autoryzacji
                )
                .formLogin((form) -> form
                        .loginPage("/login") // Strona logowania
                        .defaultSuccessUrl("/") // Strona domowa po zalogowaniu
                        .permitAll()
                )
                .logout((logout) -> logout
                        .logoutSuccessUrl("/login") // Przekieruj do strony logowania po wylogowaniu
                        .permitAll()
                );

        return http.build();
    }

    @Bean
    public PasswordEncoder passwordEncoder() {
        return new BCryptPasswordEncoder(); // Użyj BCrypt do hashowania haseł
    }
}