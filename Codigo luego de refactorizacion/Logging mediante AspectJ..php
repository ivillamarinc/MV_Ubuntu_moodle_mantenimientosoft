// Aspecto independiente para auditoría
import org.aspectj.lang.JoinPoint;
import org.aspectj.lang.annotation.After;
import org.aspectj.lang.annotation.Aspect;

@Aspect
public class LoggingAspect {

    // Se ejecuta después de cada inicio de sesión
    @After("execution(* *.login(..))")
    public void registerLoginEvent(
        JoinPoint joinPoint
    ) {

        System.out.println(
            "[LOG] Inicio de sesión detectado en: "
            + joinPoint.getSignature().getName()
        );
    }
}

// Lógica de negocio limpia
public class LoginService {

    public void login(
        String username,
        String password
    ) {

        // Validación de credenciales
        System.out.println(
            "Validando usuario..."
        );

        // Proceso de autenticación
        System.out.println(
            "Acceso concedido"
        );
    }
}
