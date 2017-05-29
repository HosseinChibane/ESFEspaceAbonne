<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e53db174567a4a5cf545f44799981079a53b9d38015a894642e55300fe9d5bdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_039f364305541a951fbbfb9960f21124566843a09573ec24d78736e2eaace24e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_039f364305541a951fbbfb9960f21124566843a09573ec24d78736e2eaace24e->enter($__internal_039f364305541a951fbbfb9960f21124566843a09573ec24d78736e2eaace24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7c53b0b7b8428bd7da0c19508d22b87d12fdb551901f3f5ffad4b6cc8d204378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c53b0b7b8428bd7da0c19508d22b87d12fdb551901f3f5ffad4b6cc8d204378->enter($__internal_7c53b0b7b8428bd7da0c19508d22b87d12fdb551901f3f5ffad4b6cc8d204378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_039f364305541a951fbbfb9960f21124566843a09573ec24d78736e2eaace24e->leave($__internal_039f364305541a951fbbfb9960f21124566843a09573ec24d78736e2eaace24e_prof);

        
        $__internal_7c53b0b7b8428bd7da0c19508d22b87d12fdb551901f3f5ffad4b6cc8d204378->leave($__internal_7c53b0b7b8428bd7da0c19508d22b87d12fdb551901f3f5ffad4b6cc8d204378_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
