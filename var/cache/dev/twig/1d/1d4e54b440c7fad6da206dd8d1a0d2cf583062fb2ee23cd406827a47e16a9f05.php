<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a61202bb157f5fb10cf0b14b9561395383a92b0c764543592d287d63408f4209 extends Twig_Template
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
        $__internal_94a69ee515a9877cbfecb9d1150028f8d87e54fa571036ab8ba2c569ce6c2858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a69ee515a9877cbfecb9d1150028f8d87e54fa571036ab8ba2c569ce6c2858->enter($__internal_94a69ee515a9877cbfecb9d1150028f8d87e54fa571036ab8ba2c569ce6c2858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_67eb54efd595a432aa4364c5cf57bae3fe86a4a24ec0c5a8fffd5ff186f6e05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67eb54efd595a432aa4364c5cf57bae3fe86a4a24ec0c5a8fffd5ff186f6e05d->enter($__internal_67eb54efd595a432aa4364c5cf57bae3fe86a4a24ec0c5a8fffd5ff186f6e05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_94a69ee515a9877cbfecb9d1150028f8d87e54fa571036ab8ba2c569ce6c2858->leave($__internal_94a69ee515a9877cbfecb9d1150028f8d87e54fa571036ab8ba2c569ce6c2858_prof);

        
        $__internal_67eb54efd595a432aa4364c5cf57bae3fe86a4a24ec0c5a8fffd5ff186f6e05d->leave($__internal_67eb54efd595a432aa4364c5cf57bae3fe86a4a24ec0c5a8fffd5ff186f6e05d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
