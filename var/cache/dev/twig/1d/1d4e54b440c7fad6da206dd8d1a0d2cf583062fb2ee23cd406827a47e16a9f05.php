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
        $__internal_fa8e86418035793c70e7f70db9c35482c241c7eee60298eb6bee4475553a710a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa8e86418035793c70e7f70db9c35482c241c7eee60298eb6bee4475553a710a->enter($__internal_fa8e86418035793c70e7f70db9c35482c241c7eee60298eb6bee4475553a710a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_4843745ef8f0b4e72ab9982a08dabe774b42dc961718357dbbe6aacfc0a97094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4843745ef8f0b4e72ab9982a08dabe774b42dc961718357dbbe6aacfc0a97094->enter($__internal_4843745ef8f0b4e72ab9982a08dabe774b42dc961718357dbbe6aacfc0a97094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fa8e86418035793c70e7f70db9c35482c241c7eee60298eb6bee4475553a710a->leave($__internal_fa8e86418035793c70e7f70db9c35482c241c7eee60298eb6bee4475553a710a_prof);

        
        $__internal_4843745ef8f0b4e72ab9982a08dabe774b42dc961718357dbbe6aacfc0a97094->leave($__internal_4843745ef8f0b4e72ab9982a08dabe774b42dc961718357dbbe6aacfc0a97094_prof);

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
